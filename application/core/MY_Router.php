<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Suporte a módulos (HMVC simples)
 *
 * Estrutura: application/modules/<modulo>/{controllers,models,views,libraries,helpers,config}
 *
 * URLs:
 *   /<modulo>                    -> modules/<modulo>/controllers/<Modulo>.php -> index()
 *   /<modulo>/<metodo>           -> modules/<modulo>/controllers/<Modulo>.php -> <metodo>()
 *   /<modulo>/<controller>/<m>   -> modules/<modulo>/controllers/<Controller>.php -> <m>()
 *
 * Se não existir módulo com o nome do 1º segmento, segue o fluxo normal (application/controllers).
 */
class MY_Router extends CI_Router {

	/**
	 * Módulo da requisição atual ('' quando não é um módulo)
	 *
	 * @var string
	 */
	public $module = '';

	protected function _set_default_controller()
	{
		if (sscanf($this->default_controller, '%[^/]/%s', $class, $method) !== 2)
		{
			$method = 'index';
		}

		$this->_localizar_modulo(array($class, $method));

		parent::_set_default_controller();
	}

	protected function _validate_request($segments)
	{
		$localizado = $this->_localizar_modulo($segments);

		return ($localizado !== FALSE) ? $localizado : parent::_validate_request($segments);
	}

	/**
	 * Procura um módulo para os segmentos informados
	 *
	 * @param	array	$segments
	 * @return	array|bool	segmentos a partir do controller, ou FALSE
	 */
	protected function _localizar_modulo($segments)
	{
		if (empty($segments[0]))
		{
			return FALSE;
		}

		$module = str_replace('-', '_', $segments[0]);
		$path   = APPPATH.'modules/'.$module.'/controllers/';

		if ( ! is_dir($path))
		{
			return FALSE;
		}

		// O CodeIgniter monta o caminho como APPPATH.'controllers/'.$directory
		$directory = '../modules/'.$module.'/controllers/';

		// modulo/controller/metodo
		if (isset($segments[1]) && file_exists($path.ucfirst(str_replace('-', '_', $segments[1])).'.php'))
		{
			$this->module    = $module;
			$this->directory = $directory;
			return array_slice($segments, 1);
		}

		// modulo/metodo (controller com o mesmo nome do módulo)
		if (file_exists($path.ucfirst($module).'.php'))
		{
			$this->module    = $module;
			$this->directory = $directory;
			return $segments;
		}

		return FALSE;
	}
}
