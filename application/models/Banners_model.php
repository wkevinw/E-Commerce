<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Banners_model extends CI_Model {

	public function busca_banner(){
		
		$this->db->select('banners.*');
		$this->db->from('banners');
		return $this->db->get()->result();

			}

	public function busca_mini_banner(){

		$this->db->select('mini_banners.*');
		$this->db->from('mini_banners');
		$this->db->limit('2');
		return $this->db->get()->result();
	}


		}