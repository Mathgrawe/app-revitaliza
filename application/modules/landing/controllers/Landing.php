<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landing extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// Faz o loader enxergar modules/landing/views e modules/landing/config
		$this->load->add_package_path(APPPATH.'modules/landing/');
	}

	public function index()
	{
		// Caminho relativo à raiz do app: funciona em subpasta, com ou sem base_url configurado
		$root = rtrim(str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'])), '/');

		$this->load->view('landing', array(
			'assets' => $root.'/assets/landing/',
		));
	}
}
