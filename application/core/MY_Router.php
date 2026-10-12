<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Router com suporte a módulos em application/modules/<modulo>/controllers.
 *
 * URL /landing         -> modules/landing/controllers/Landing.php
 * URL /landing/foo     -> modules/landing/controllers/Foo.php (se existir)
 *                         ou Landing::foo()
 * default_controller   -> pode apontar para um módulo (ex.: 'landing')
 */
class MY_Router extends CI_Router {

	protected function _module_controller($module, $class)
	{
		$dir = '../modules/'.$module.'/controllers/';
		return file_exists(APPPATH.'controllers/'.$dir.ucfirst($class).'.php') ? $dir : FALSE;
	}

	protected function _set_default_controller()
	{
		if (sscanf($this->default_controller, '%[^/]/%s', $class, $method) !== 2)
		{
			$class = $this->default_controller;
		}

		if ( ! file_exists(APPPATH.'controllers/'.ucfirst($class).'.php')
			&& ($dir = $this->_module_controller($class, $class)) !== FALSE)
		{
			$this->directory = $dir;
		}

		parent::_set_default_controller();
	}

	protected function _validate_request($segments)
	{
		if (isset($segments[0]) && ! isset($this->directory)
			&& ! file_exists(APPPATH.'controllers/'.ucfirst($segments[0]).'.php'))
		{
			$module = $segments[0];

			if (isset($segments[1]) && ($dir = $this->_module_controller($module, $segments[1])) !== FALSE)
			{
				$this->directory = $dir;
				return array_slice($segments, 1);
			}

			if (($dir = $this->_module_controller($module, $module)) !== FALSE)
			{
				$this->directory = $dir;
				return $segments;
			}
		}

		return parent::_validate_request($segments);
	}
}
