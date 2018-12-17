<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends CI_Model {

	// Menampilkan semua data users
	public function listing()
	{
		$this->db->select('*');
		$this->db->from('users');
		$this->db->order_by('user_id', 'desc');

		$query = $this->db->get();
		return $query->result_array();
	}

	public function listing_pasar_ternak()
	{
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('akses_level', 'Pasar Ternak');

		$query = $this->db->get();
		return $query->result_array();
	}

	public function listing_operator_pasar_ternak($Value='')
	{
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('akses_level', 'Operator');
		$this->db->where('operator_id', $Value);

		$query = $this->db->get();
		return $query->result_array();
	}

	public function listing_peternak($Value='')
	{
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('akses_level', 'Peternak');
		$this->db->where('peternak_id', $Value);

		$query = $this->db->get();
		return $query->result_array();
	}

// Menampilkan data berdasarkan parameter user_id
	public function detail($id='')
	{
		$this->db->select('*'); //'*' untuk menampilkan semua kolom di data base
		$this->db->from('users');
		$this->db->where('user_id', $id);

		$query = $this->db->get();
		return $query->row_array();
	}

	public function detail_operator_pasar_ternak($id="")
	{
		$this->db->select('*'); //'*' untuk menampilkan semua kolom di data base
		$this->db->from('users');
		$this->db->where('operator_id', $id);

		$query = $this->db->get();
		return $query->row_array();
	}

// Simpan / tambah data ke database
	public function tambah($data='')
	{
		$this->db->insert('users', $data);
	}

// update data database
	public function edit($data='', $id='')
	{
		$this->db->where('user_id', $id); // mencari data di database
		$this->db->update('users', $data);
	}

// Hapus data
	public function hapus($id='')
	{
		$this->db->where('user_id', $id);	
		$this->db->delete('users');
	}	

}

/* End of file users.php */
/* Location: ./application/models/users.php */