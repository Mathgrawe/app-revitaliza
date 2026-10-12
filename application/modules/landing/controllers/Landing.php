<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landing extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('landing_model');
	}

	public function index()
	{
		$data = array(
			'title'      => 'iParts - Conectando pessoas às oficinas',
			'styles'     => array('assets/landing/css/landing.css'),
			'scripts'    => array('assets/landing/js/landing.js'),
			'beneficios' => $this->landing_model->listar_beneficios(),
			'categorias' => $this->landing_model->listar_categorias(),
			'categoria_ativa' => 'freio',
		);

		$this->load->view('index', $data);
	}
}
