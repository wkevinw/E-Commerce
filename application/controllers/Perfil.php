<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perfil extends LOJA_Controller {

	
	public function login(){

		$logado = $this->session->userdata('login_sessao_loja_online');
		if($logado){
			redirect(base_url('perfil'));
		}else{
			$this->montaTela('perfil/login');
		}

		
	}


	public function realiza_login(){



		$email = $this->input->post('email');

		$senha = $this->input->post('senha');

		$this->load->model('Perfil_model');
		$usuario = $this->Perfil_model->realizar_login($email,$senha);

		if($usuario){
				$this->session->set_userdata('login_sessao_loja_online', $usuario);
				redirect(base_url('perfil'));
		}else{
			redirect(base_url('login'));
		}
}
	public function deslogar(){

		$this->session->unset_userdata('login_sessao_loja_online');

redirect(base_url('login'));

	}	

	public function cadastrar(){

		
	$this->montaTela('perfil/formulario_cadastro');


	}

	
		}
