<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda_model extends CI_Model {

	public function slider()
	{
		$this->db->select('judul_gallery, deskripsi_gallery, path_file'); //'*' untuk menampilkan semua kolom di data base
		$this->db->from('gallery');
		$this->db->where('status_gallery', 'Publish');

		$query = $this->db->get();
		return $query->result();
	}


	public function hot_item()
	{
		$this->db->select('*'); //'*' untuk menampilkan semua kolom di data base
		$this->db->from('daftar_ternak');

		$query = $this->db->get();
		return $query->result();
	}

	public function header_sapi()
	{
		$this->db->select('ras_kategori'); //'*' untuk menampilkan semua kolom di data base
		$this->db->from('kategori');
		$this->db->where('nama_kategori', 'Sapi');

		$query = $this->db->get();
		return $query->result();
	}

	public function header_kambing()
	{
		$this->db->select('ras_kategori'); //'*' untuk menampilkan semua kolom di data base
		$this->db->from('kategori');
		$this->db->where('nama_kategori', 'Kambing');

		$query = $this->db->get();
		return $query->result();
	}
}

/* End of file Beranda_model.php */
/* Location: ./application/models/Beranda_model.php */