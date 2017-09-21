<?php
/**
 * Template Lite template_build_dir template internal module
 *
 * Type:	 template
 * Name:	 template_build_dir
 */

function template_build_dir($dir, $id, &$object)
{
	$_args = explode('|', $id);
	if (count($_args) == 1 && empty($_args[0]))
	{
		return $object->_get_dir($dir);
	}
	$_res = $object->_get_dir($dir);
	foreach($_args as $value)
	{
		$_res .= $value.DIRECTORY_SEPARATOR;
		if (!is_dir($_res))
		{
			@mkdir($_res, 0777);
		}
	}
	return $_res;
}

?>