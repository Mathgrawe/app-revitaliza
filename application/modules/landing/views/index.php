<?php defined('BASEPATH') OR exit('No direct script access allowed');

$this->load->view('layouts/head');

$this->load->view('partials/navbar');
$this->load->view('sections/hero');
$this->load->view('sections/beneficios');
$this->load->view('sections/servicos');
$this->load->view('sections/afiliado');
$this->load->view('sections/app');
$this->load->view('partials/footer');
$this->load->view('partials/video_modal');

$this->load->view('layouts/foot');
