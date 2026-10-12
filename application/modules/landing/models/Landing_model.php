<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Conteúdo da landing page.
 * Por enquanto os dados são fixos; depois podem vir do banco.
 */
class Landing_model extends CI_Model {

	const IMG = 'https://images.unsplash.com/';

	public function listar_beneficios()
	{
		return array(
			array('icone' => 'bi-phone',       'titulo' => 'Fácil de Pedir',   'texto' => 'Você só precisa de alguns passos para agendar serviços pro seu veículo.'),
			array('icone' => 'bi-patch-check', 'titulo' => '100% Confiável',   'texto' => 'Com o iParts, a confiabilidade é garantida em cada serviço.'),
			array('icone' => 'bi-award',       'titulo' => 'Melhor Qualidade', 'texto' => 'Não apenas rápido, a qualidade do serviço também é o número um.'),
		);
	}

	public function listar_categorias()
	{
		return array(
			'suspensao' => array(
				'nome'  => 'Suspensão',
				'icone' => 'bi-tools',
				'servicos' => array(
					$this->_montar_servico('Troca de Amortecedor', 320, 'photo-1619642751034-765dfdf7c58e'),
					$this->_montar_servico('Alinhamento',          80,  'photo-1530046339160-ce3e530c7d2f'),
				),
			),
			'freio' => array(
				'nome'  => 'Freio',
				'icone' => 'bi-disc',
				'servicos' => array(
					$this->_montar_servico('Troca do Disco',    200, 'photo-1486262715619-67b85e0b08d3'),
					$this->_montar_servico('Troca da Pastilha', 50,  'photo-1625047509248-ec889cbff17f'),
				),
			),
			'motor' => array(
				'nome'  => 'Motor',
				'icone' => 'bi-gear-wide-connected',
				'servicos' => array(
					$this->_montar_servico('Troca de Óleo', 150, 'photo-1487754180451-c456f719a1fc'),
					$this->_montar_servico('Revisão Geral', 450, 'photo-1486262715619-67b85e0b08d3'),
				),
			),
			'transmissao' => array(
				'nome'  => 'Transmissão',
				'icone' => 'bi-joystick',
				'servicos' => array(
					$this->_montar_servico('Óleo do Câmbio', 180, 'photo-1619642751034-765dfdf7c58e'),
					$this->_montar_servico('Revisão Câmbio', 380, 'photo-1530046339160-ce3e530c7d2f'),
				),
			),
			'embreagem' => array(
				'nome'  => 'Embreagem',
				'icone' => 'bi-record-circle',
				'servicos' => array(
					$this->_montar_servico('Kit Embreagem',     600, 'photo-1625047509248-ec889cbff17f'),
					$this->_montar_servico('Regulagem do Cabo', 70,  'photo-1487754180451-c456f719a1fc'),
				),
			),
		);
	}

	protected function _montar_servico($titulo, $preco, $foto)
	{
		return array(
			'titulo' => $titulo,
			'preco'  => $preco,
			'img'    => self::IMG.$foto.'?w=600&q=80',
		);
	}
}
