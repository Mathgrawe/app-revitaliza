<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Faz o $this->load procurar views, models, libraries, helpers e config
 * primeiro dentro do módulo atual e depois em application/.
 */
class MY_Loader extends CI_Loader {

	public function initialize()
	{
		$router =& load_class('Router', 'core');

		if ( ! empty($router->module))
		{
			$this->add_package_path(APPPATH.'modules/'.$router->module.'/');
		}

		parent::initialize();
	}
}
