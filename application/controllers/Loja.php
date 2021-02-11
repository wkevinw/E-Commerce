<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Loja extends LOJA_Controller {

	public function index()
	{


		$this->load->model('Produtos_model');
		$this->load->model('Banners_model');

		//BUsca produtos em destaques
		$produtos = $this->Produtos_model->busca_produtos_em_destaques();
		$banner = $this->Banners_model->busca_banner();
		$mini_banner = $this->Banners_model->busca_mini_banner();



		$this->montaTela('home',compact('produtos','banner','mini_banner'));

	
	}


	

}
