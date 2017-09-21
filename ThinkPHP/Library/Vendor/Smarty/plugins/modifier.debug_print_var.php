<?php
/**
 * Smarty plugin
 * 
 * @package Smarty
 * @subpackage Debug
 */

/**
 * Smarty debug_print_var modifier plugin
 * 
 * Type:     modifier<br>
 * Name:     debug_print_var<br>
 * Purpose:  formats variable contents for display in the console
 *
 * @author Monte Ohrt <monte at ohrt dot com> 
 * @param array|object $var     variable to be formatted
 * @param integer      $depth   maximum recursion depth if $var is an array
 * @param integer      $length  maximum string length if $var is a string
 * @return string 
 */
function smarty_modifier_debug_print_var ($var, $depth = 0, $length = 40)
{
    $_replace = array("\n" => '<i>\n</i>',
        "\r" => '<i>\r</i>',
        "\t" => '<i>\t</i>'
        );

    switch (gettype($var)) {
        case 'array' :
            $ress = '<b>Array (' . count($var) . ')</b>';
            foreach ($var as $curr_key => $curr_val) {
                $ress .= '<br>' . str_repeat('&nbsp;', $depth * 2)
                 . '<b>' . strtr($curr_key, $_replace) . '</b> =&gt; '
                 . smarty_modifier_debug_print_var($curr_val, ++$depth, $length);
                $depth--;
            } 
            break;
            
        case 'object' :
            $object_vars = get_object_vars($var);
            $ress = '<b>' . get_class($var) . ' Object (' . count($object_vars) . ')</b>';
            foreach ($object_vars as $curr_key => $curr_val) {
                $ress .= '<br>' . str_repeat('&nbsp;', $depth * 2)
                 . '<b> -&gt;' . strtr($curr_key, $_replace) . '</b> = '
                 . smarty_modifier_debug_print_var($curr_val, ++$depth, $length);
                $depth--;
            } 
            break;
            
        case 'boolean' :
        case 'NULL' :
        case 'resource' :
            if (true === $var) {
                $ress = 'true';
            } elseif (false === $var) {
                $ress = 'false';
            } elseif (null === $var) {
                $ress = 'null';
            } else {
                $ress = htmlspecialchars((string) $var);
            } 
            $ress = '<i>' . $ress . '</i>';
            break;
            
        case 'integer' :
        case 'float' :
            $ress = htmlspecialchars((string) $var);
            break;
            
        case 'string' :
            $ress = strtr($var, $_replace);
            if (SMARTY_MBSTRING /* ^phpunit */&&empty($_SERVER['SMARTY_PHPUNIT_DISABLE_MBSTRING'])/* phpunit$ */) {
                if (mb_strlen($var, SMARTY_RESOURCE_CHAR_SET) > $length) {
                    $ress = mb_substr($var, 0, $length - 3, SMARTY_RESOURCE_CHAR_SET) . '...';
                }
            } else {
                if (isset($var[$length])) {
                    $ress = substr($var, 0, $length - 3) . '...';
                }
            }

            $ress = htmlspecialchars('"' . $ress . '"');
            break;
            
        case 'unknown type' :
        default :
            $ress = strtr((string) $var, $_replace);
            if (SMARTY_MBSTRING /* ^phpunit */&&empty($_SERVER['SMARTY_PHPUNIT_DISABLE_MBSTRING'])/* phpunit$ */) {
                if (mb_strlen($ress, SMARTY_RESOURCE_CHAR_SET) > $length) {
                    $ress = mb_substr($ress, 0, $length - 3, SMARTY_RESOURCE_CHAR_SET) . '...';
                }
            } else {
                if (strlen($ress) > $length) {
                    $ress = substr($ress, 0, $length - 3) . '...';
                }
            }
             
            $ress = htmlspecialchars($ress);
    } 

    return $ress;
} 

?>