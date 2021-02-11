<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produtos_model extends CI_Model {

	public function busca_produtos()
	{

		//DESC = Ordena do maior para o menor
		//ASC = Ordena do menor para o maior
		$this->db->select('produtos.*');
		$this->db->from('produtos');
		$this->db->order_by('qtd_vendidos','DESC');
		return $this->db->get()->result();
	}


	public function busca_produtos_em_destaques(){

		$this->db->select('produtos.*');
		$this->db->from('produtos');
		$this->db->where('destaques', 1);

		return $this->db->get()->result();

	}

	public function busca_produto_id($id){
		
		$this->db->select('produtos.*');
		$this->db->select('categorias.nome As nome_categoria');
		$this->db->from('produtos');
		$this->db->join('categorias', 'categorias.id=produtos.id_categorias');
		$this->db->where('produtos.id',$id);

		return $this->db->get()->row();

	}

	
	
}
