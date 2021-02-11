<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perfil_model extends CI_Model {


	public function realizar_login($email,$senha){

		$this->db->select('clientes.*');
		$this->db->from('clientes');
		$this->db->where('email', $email);
		$this->db->where('senha', md5($senha));

		return $this->db->get()->row();

	}



		}