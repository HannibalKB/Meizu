<?php

/* vim: set shiftwidth=2 expandtab softtabstop=2: */

namespace Boris;

/**
 * The ShallowParser takes whatever is currently buffered and chunks it into individual statements.
 */
class ShallowParser {
  private $_pairs = array(
    '('   => ')',
    '{'   => '}',
    '['   => ']',
    '"'   => '"',
    "'"   => "'",
    '//'  => "\n",
    '#'   => "\n",
    '/*'  => '*/',
    '<<<' => '_heredoc_special_case_'
  );

  private $_initials;

  public function __construct() {
    $this->_initials   = '/^(' . implode('|', array_map(array($this, 'quote'), array_keys($this->_pairs))) . ')/';
  }

  /**
   * Break the $buffer into chunks, with one for each highest-level construct possible.
   *
   * If the buffer is incomplete, returns an empty array.
   *
   * @param string $buffer
   *
   * @return array
   */
  public function statements($buffer) {
    $res = $this->_createres($buffer);

    while (strlen($res->buffer) > 0) {
      $this->_resetres($res);

      if ($res->state == '<<<') {
        if (!$this->_initializeHeredoc($res)) {
          continue;
        }
      }

      $rules = array('_scanEscapedChar', '_scanRegion', '_scanStateEntrant', '_scanWsp', '_scanChar');

      foreach ($rules as $method) {
        if ($this->$method($res)) {
          break;
        }
      }

      if ($res->stop) {
        break;
      }
    }

    if (!empty($res->statements) && trim($res->stmt) === '' && strlen($res->buffer) == 0) {
      $this->_combineStatements($res);
      $this->_prepareForDebug($res);
      return $res->statements;
    }
  }

  public function quote($token) {
    return preg_quote($token, '/');
  }

  // -- Private Methods

  private function _createres($buffer) {
    $res = new \stdClass();
    $res->buffer     = $buffer;
    $res->stmt       = '';
    $res->state      =  null;
    $res->states     = array();
    $res->statements = array();
    $res->stop       = false;

    return $res;
  }

  private function _resetres($res) {
    $res->stop       = false;
    $res->state      = end($res->states);
    $res->terminator = $res->state
      ? '/^(.*?' . preg_quote($this->_pairs[$res->state], '/') . ')/s'
      : null
      ;
  }

  private function _combineStatements($res) {
    $combined = array();

    foreach ($res->statements as $scope) {
      if (trim($scope) == ';' || substr(trim($scope), -1) != ';') {
        $combined[] = ((string) array_pop($combined)) . $scope;
      } else {
        $combined[] = $scope;
      }
    }

    $res->statements = $combined;
  }

  private function _prepareForDebug($res) {
    $res->statements []= $this->_prepareDebugStmt(array_pop($res->statements));
  }

  private function _initializeHeredoc($res) {
    if (preg_match('/^([\'"]?)([a-z_][a-z0-9_]*)\\1/i', $res->buffer, $match)) {
      $docId = $match[2];
      $res->stmt .= $match[0];
      $res->buffer = substr($res->buffer, strlen($match[0]));

      $res->terminator = '/^(.*?\n' . $docId . ');?\n/s';

      return true;
    } else {
      return false;
    }
  }

  private function _scanWsp($res) {
    if (preg_match('/^\s+/', $res->buffer, $match)) {
      if (!empty($res->statements) && $res->stmt === '') {
        $res->statements[] = array_pop($res->statements) . $match[0];
      } else {
        $res->stmt .= $match[0];
      }
      $res->buffer = substr($res->buffer, strlen($match[0]));

      return true;
    } else {
      return false;
    }
  }

  private function _scanEscapedChar($res) {
    if (($res->state == '"' || $res->state == "'")
        && preg_match('/^[^' . $res->state . ']*?\\\\./s', $res->buffer, $match)) {

      $res->stmt .= $match[0];
      $res->buffer = substr($res->buffer, strlen($match[0]));

      return true;
    } else {
      return false;
    }
  }

  private function _scanRegion($res) {
    if (in_array($res->state, array('"', "'", '<<<', '//', '#', '/*'))) {
      if (preg_match($res->terminator, $res->buffer, $match)) {
        $res->stmt .= $match[1];
        $res->buffer = substr($res->buffer, strlen($match[1]));
        array_pop($res->states);
      } else {
        $res->stop = true;
      }

      return true;
    } else {
      return false;
    }
  }

  private function _scanStateEntrant($res) {
    if (preg_match($this->_initials, $res->buffer, $match)) {
      $res->stmt .= $match[0];
      $res->buffer = substr($res->buffer, strlen($match[0]));
      $res->states[] = $match[0];

      return true;
    } else {
      return false;
    }
  }

  private function _scanChar($res) {
    $chr = substr($res->buffer, 0, 1);
    $res->stmt .= $chr;
    $res->buffer = substr($res->buffer, 1);
    if ($res->state && $chr == $this->_pairs[$res->state]) {
      array_pop($res->states);
    }

    if (empty($res->states) && ($chr == ';' || $chr == '}')) {
      if (!$this->_isLambda($res->stmt) || $chr == ';') {
        $res->statements[] = $res->stmt;
        $res->stmt = '';
      }
    }

    return true;
  }

  private function _isLambda($input) {
    return preg_match(
      '/^([^=]*?=\s*)?function\s*\([^\)]*\)\s*(use\s*\([^\)]*\)\s*)?\s*\{.*\}\s*;?$/is',
      trim($input)
    );
  }

  private function _isReturnable($input) {
    $input = trim($input);
    if (substr($input, -1) == ';' && substr($input, 0, 1) != '{') {
      return $this->_isLambda($input) || !preg_match(
        '/^(' .
        'echo|print|exit|die|goto|global|include|include_once|require|require_once|list|' .
        'return|do|for|foreach|while|if|function|namespace|class|interface|abstract|switch|' .
        'declare|throw|try|unset' .
        ')\b/i',
        $input
      );
    } else {
      return false;
    }
  }

  private function _prepareDebugStmt($input) {
    if ($this->_isReturnable($input) && !preg_match('/^\s*return/i', $input)) {
      $input = sprintf('return %s', $input);
    }

    return $input;
  }
}
