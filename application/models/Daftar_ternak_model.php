<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar_ternak_model extends CI_Model {

	public function listing()
	{ 
		$this->db->select('*');
		$this->db->from('daftar_ternak');
		$this->db->order_by('daftar_ternak_id', 'desc');

		$query = $this->db->get();
		return $query->result_array();
	}

	public function listing_last($data='',$rfid='')
	{
		
			$this->db->select($data);
			$this->db->from('daftar_ternak');
			$this->db->where('ternak_rfid', $rfid);
			$this->db->order_by('daftar_ternak_id', 'desc');
		

		$query = $this->db->get();
		return $query->result_array();
	}

	public function listing_last_id($data='')
	{
		
			$this->db->select($data);
			$this->db->from('daftar_ternak');
			$this->db->limit(1);
			// $this->db->where('ternak_rfid', $rfid);
			$this->db->order_by('daftar_ternak_id', 'desc');
		

		$query = $this->db->get();
		return $query->result_array();
	}

	public function listing_ternak($id='')
	{
		$this->db->select('*'); 
		$this->db->from('daftar_ternak');
		$this->db->where('pasar_ternak_id', $id);
		$this->db->where('bobot_ternak!=', 0);
		$this->db->where('status_ternak!=', 'Terjual');

		$query = $this->db->get();
		return $query->result_array();
	}

	public function listing_ternak_terjual($id='')
	{
		$this->db->select('*'); 
		$this->db->from('keranjang_belanja');
		$this->db->where('pasar_ternak_id', $id);
		$this->db->where('status', 'terjual');

		$query = $this->db->get();
		return $query->result_array();
	}

	public function listing_ternak_peternakan($id='')
	{
		$this->db->select('*'); 
		$this->db->from('daftar_ternak');
		$this->db->where('nama_peternakan', $id);

		$query = $this->db->get();
		return $query->result_array();
	}

// Menampilkan data berdasarkan parameter daftar_ternak_id
	public function detail($id='')
	{
		$this->db->select('*'); 
		$this->db->from('daftar_ternak');
		$this->db->where('daftar_ternak_id', $id);

		$query = $this->db->get();
		return $query->row_array();
	}

// Simpan / tambah data ke database
	public function tambah($data='')
	{
		$this->db->insert('daftar_ternak', $data);
	}

// update data database
	public function edit($data='', $id='')
	{
		$this->db->where('daftar_ternak_id', $id); // mencari data di database
		$this->db->update('daftar_ternak', $data);
	}

// Hapus data
	public function hapus($id='')
	{
		$this->db->where('daftar_ternak_id', $id);	
		$this->db->delete('daftar_ternak');
	}	

}

/* End of file Daftar_ternak.php */
/* Location: ./application/models/Daftar_ternak.php */