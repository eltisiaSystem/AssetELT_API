<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_model extends CI_Model {

	public function listing()
	{
		$this->db->select('*');
		$this->db->from('kategori');
		$this->db->order_by('kategori_id', 'desc');

		$query = $this->db->get();
		return $query->result_array();
	}

// Menampilkan data berdasarkan parameter kategori_id
	public function detail($id='')
	{
		$this->db->select('*'); //'*' untuk menampilkan semua kolom di data base
		$this->db->from('kategori');
		$this->db->where('kategori_id', $id);

		$query = $this->db->get();
		return $query->row_array();
	}

// Simpan / tambah data ke database
	public function tambah($data='')
	{
		$this->db->insert('kategori', $data);
	}

// update data database
	public function edit($data='', $id='')
	{
		$this->db->where('kategori_id', $id); // mencari data di database
		$this->db->update('kategori', $data);
	}

// Hapus data
	public function hapus($id='')
	{
		$this->db->where('kategori_id', $id);	
		$this->db->delete('kategori');
	}	

	public function check($id='')
	{
		$this->db->select('kategori_id');
		$this->db->from('daftar_ternak');
		$this->db->where('kategori_id', $id);

		$query = $this->db->get();
		return $query->result_array();
	}

	public function aktif()
	{
		$this->db->select('*');
		$this->db->from('kategori');
		$this->db->where('status_kategori', 'Aktif');
		$this->db->order_by('nama_kategori', 'asc');

		$query = $this->db->get();
		return $query->result_array();
	}

}

/* End of file Kategori_model.php */
/* Location: ./application/models/Kategori_model.php */