<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Slider_model extends CI_Model {

	public function listing()
	{
		$this->db->select('gallery.*, kategori.nama_kategori, kategori.slug_kategori');
		$this->db->from('gallery');
		$this->db->join('kategori', 'kategori.kategori_id = gallery.kategori_id', 'left');
		$this->db->order_by('gallery_id', 'asc');

		$query = $this->db->get();
		return $query->result_array();
	}

// Menampilkan data berdasarkan parameter gallery_id
	public function detail($id='')
	{
		$this->db->select('gallery.*, kategori.nama_kategori, kategori.slug_kategori, created.username as created_by, updated.username as updated_by');
		$this->db->from('gallery');
		$this->db->join('kategori', 'kategori.kategori_id = gallery.kategori_id', 'left');
		$this->db->join('users as created', 'created.user_id = gallery.created_by', 'left');
		$this->db->join('users as updated', 'updated.user_id = gallery.updated_by', 'left');
		$this->db->where('gallery_id', $id);

		$query = $this->db->get();
		return $query->row_array();
	}

	public function gallery()
	{
		$this->db->select('judul_gallery, deskripsi_gallery, path_file'); //'*' untuk menampilkan semua kolom di data base
		$this->db->from('gallery');
		$this->db->where('status_gallery', 'Publish');

		$query = $this->db->get();
		return $query->result();
	}

// Simpan / tambah data ke database
	public function tambah($data='')
	{
		$this->db->insert('gallery', $data);
	}

// update data database
	public function edit($data='', $id='')
	{
		$this->db->where('gallery_id', $id); // mencari data di database
		$this->db->update('gallery', $data);
	}

// Hapus data
	public function hapus($id='')
	{
		$this->db->where('gallery_id', $id);	
		$this->db->delete('gallery');
	}	

}

/* End of file slider_model.php */
/* Location: ./application/models/slider_model.php */