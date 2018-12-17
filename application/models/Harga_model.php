<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Harga_model extends CI_Model {

	public function listing()
	{
		$this->db->select('*');
		$this->db->from('daftar_harga');
		$this->db->order_by('id_harga', 'desc');

		$query = $this->db->get();
		return $query->result_array();
	}

// Menampilkan data berdasarkan parameter daftar_harga_id
	public function detail($id='')
	{
		$this->db->select('*'); //'*' untuk menampilkan semua kolom di data base
		$this->db->from('daftar_harga');
		$this->db->where('id_harga', $id);

		$query = $this->db->get();
		return $query->row_array();
	}

	public function tambah($data='')
	{
		$this->db->insert('daftar_harga', $data);
	}

// update data database
	public function edit($data='', $id='')
	{
		$this->db->where('id_harga', $id); // mencari data di database
		$this->db->update('daftar_harga', $data);
	}

	public function hapus($id='')
	{
		$this->db->where('id_harga', $id);	
		$this->db->delete('daftar_harga');
	}	

}

/* End of file Harga_model.php */
/* Location: ./application/models/Harga_model.php */