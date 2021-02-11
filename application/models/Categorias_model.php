<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categorias_model extends CI_Model {

	public function busca_categorias(){
		
		$this->db->select('categorias.*');
		$this->db->from('categorias');
		return $this->db->get()->result();

			}

	public function busca_categorias_cabecalho(){

		$this->db->select('categorias.*');
		$this->db->from('categorias');
		$this->db->where('cabecalho',1);
		return $this->db->get()->result();
	}


		}