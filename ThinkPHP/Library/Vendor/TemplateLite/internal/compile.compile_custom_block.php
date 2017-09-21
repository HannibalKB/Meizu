<?php
/**
 * Template Lite compile custom block - template internal module
 *
 * Type:	 template
 * Name:	 compile_custom_block
 */

function compile_compile_custom_block($function, $modifiers, $arguments, &$_res, &$object)
{
	if ($function{0} == '/')
	{
		$start_tag = false;
		$function = substr($function, 1);
	}
	else
	{
		$start_tag = true;
	}

	if ($function = $object->_plugin_exists($function, "block"))
	{
		if ($start_tag)
		{
			$_args = $object->_parse_arguments($arguments);
			foreach($_args as $key => $value)
			{
				if (is_bool($value))
				{
					$value = $value ? 'true' : 'false';
				}
				if (is_null($value))
				{
					$value = 'null';
				}
				$_args[$key] = "'$key' => $value";
			}
			$_res = "<?php \$this->_tag_stack[] = array('$function', array(".implode(',', (array)$_args).")); ";
			$_res .= $function . '(array(' . implode(',', (array)$_args) .'), null, $this); ';
			$_res .= 'ob_start(); ?>';
		}
		else
		{
			$_res .= '<?php $this->_block_content = ob_get_contents(); ob_end_clean(); ';
			$_res .= '$this->_block_content = ' . $function . '($this->_tag_stack[count($this->_tag_stack) - 1][1], $this->_block_content, $this); ';
			if (!empty($modifiers))
			{
				$_res .= '$this->_block_content = ' . $object->_parse_modifier('$this->_block_content', $modifiers) . '; ';
			}
			$_res .= 'echo $this->_block_content; array_pop($this->_tag_stack); ?>';
		}
		return true;
	}
	else
	{
		return false;
	}
}

?>