<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LOJA_controller extends CI_Controller {

	public function montaTela($pagina,$dados=NULL){

		$this->load->model('Categorias_model');
		$categoria = $this->Categorias_model->busca_categorias();
		$categoria_cabecalho = $this->Categorias_model->busca_categorias_cabecalho();




		
		$this->load->model('Produtos_model');
		//ler a sessao passando pelo nome
		$carrinho = $this->session->userdata('carrinho_loja');


		
		if($carrinho){
		foreach ($carrinho as $index => $value){
		//buscar o produto atravez do id

			$carrinho[$index]['dados_produto'] = $this->Produtos_model->busca_produto_id($value['produto']);
		 }
		}


		


		$this->load->view('cabecalho',compact('categoria','categoria_cabecalho','carrinho'));
		$this->load->view($pagina,$dados);
		$this->load->view('rodape');
	



	}


	
}
