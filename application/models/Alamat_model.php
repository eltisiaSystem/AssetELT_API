<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alamat_model extends CI_Model {

	public function edit($data='')
	{
		$this->db->where('id', 1); // mencari data di database
		$this->db->update('alamat_kantor', $data);
	}

	public function listing()
	{
		$this->db->select('*');
		$this->db->from('alamat_kantor');
		$this->db->order_by('id', 1);

		$query = $this->db->get();
		return $query->result_array();
	}

	public function detail()
	{
		$this->db->select('*'); //'*' untuk menampilkan semua kolom di data base
		$this->db->from('alamat_kantor');
		$this->db->where('id', 1);

		$query = $this->db->get();
		return $query->row_array();
	}
}

/* End of file Alamat_model.php */
/* Location: ./application/models/Alamat_model.php */