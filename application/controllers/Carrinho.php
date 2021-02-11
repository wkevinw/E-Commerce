<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Carrinho extends LOJA_Controller {

	public function adicionar_carrinho()
	{

	// lendo uma sessao passando o nome
	$carrinho = $this->session->userdata('carrinho_loja');

	if($carrinho){
		//carrinho de compras ja existe

		//passa pelos produtos do carrinho
		foreach ($carrinho as $index => $value) {
			//verifico se o produto esta adicionado ou ja existe no carrinho
			if($value['produto'] == $this->input->post('id_produto')){
				//se existe, soma a quantidade
				$carrinho[$index]['quantidade'] = $carrinho[$index]['quantidade']+$this->input->post('quantidade');
				//atualizar o carrinho
				$this->session->set_userdata('carrinho_loja', $carrinho);
             
           redirect(base_url('carrinho'));
			}
		}
		//se nao tiver produto no carrinho, adiciona ele no carrinho
		$carrinho[] = array(
			'produto' => $this->input->post('id_produto'),
			'quantidade' => $this->input->post('quantidade'),

		 );
		//atualizar o carrinho
		$this->session->set_userdata('carrinho_loja', $carrinho);	
		
		
           redirect(base_url('carrinho'));

	}else{

		//carrinho de compra ainda nao existe

			//monto o array com o novo produto a ser adicionado no carrinho
		$arrayCarrinho[] = array(
			'produto' => $this->input->post('id_produto'),
			'quantidade' => $this->input->post('quantidade'),

		 );

		// cria uma sessao com a função set_userdata passando o nome e os pprodutos do carrinho
		$this->session->set_userdata('carrinho_loja', $arrayCarrinho);
		
           redirect(base_url('carrinho'));
	}



	}

	public function listar_carrinho(){

		
			$this->load->model('Produtos_model');
		//ler a sessao passando pelo nome
		$carrinho = $this->session->userdata('carrinho_loja');

		foreach ($carrinho as $index => $value) {
		//buscar o produto atravez do id

			$carrinho[$index]['dados_produto'] = $this->Produtos_model->busca_produto_id($value['produto']);
		}

      $this->montaTela('carrinho',compact('carrinho'));

	}


	public function apaga_produto_carrinho(){

		$produto =  $this->input->get('produto');

		$carrinho = $this->session->userdata('carrinho_loja');

	foreach ($carrinho as $index => $value) {

		if($value['produto'] == $produto){
			unset($carrinho[$index]);
		}

	}
	$this->session->set_userdata('carrinho_loja', $carrinho);

	redirect(base_url('carrinho'));
	}


	public function diminuir_produto_carrinho(){

		$produto =  $this->input->get('produto');

		$carrinho = $this->session->userdata('carrinho_loja');

	foreach ($carrinho as $index => $value) {

		if ($carrinho[$index]['quantidade'] > 1) {
				
		if($value['produto'] == $produto){
			$carrinho[$index]['quantidade'] -= 1;
		}
	}
}
$this->session->set_userdata('carrinho_loja', $carrinho);
		redirect(base_url('carrinho'));
}
	public function aumentar_produto_carrinho(){

		$produto =  $this->input->get('produto');

		$carrinho = $this->session->userdata('carrinho_loja');

	foreach ($carrinho as $index => $value) {

		if($value['produto'] == $produto){
			$carrinho[$index]['quantidade'] += 1;

	}

}

		$this->session->set_userdata('carrinho_loja', $carrinho);
		redirect(base_url('carrinho'));
}

}