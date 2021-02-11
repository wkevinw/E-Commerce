<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produtos extends LOJA_Controller {

	public function listagem()
	{
		$this->load->model('Produtos_model');
		$produtos = $this->Produtos_model->busca_produtos();
		$this->montaTela('Produtos/lista', compact('produtos'));

	}


	public function detalhes()
	{
		$this->load->model('Produtos_model');
		$id = $this->input->get('produto');

		$produto = $this->Produtos_model->busca_produto_id($id);

		
		$this->montaTela('Produtos/detalhes', compact('produto'));
	}
}
