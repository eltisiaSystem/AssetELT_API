<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shop_model extends CI_Model {

	public function add($db='',$value='')
	{
		$this->db->insert($db, $value);
	}

	public function update_data($filter='', $db='', $id='', $value='')
	{
		$this->db->where($filter, $id);
		$this->db->update($db, $value);
	}


	public function update_cart($id='', $value='')
	{
		$this->db->where('created_by', $id);
		$this->db->where('status', 'Cart');
		$this->db->update('keranjang_belanja', $value);
	}

	public function listing_chart($Value = '')
	{
		$this->db->select('*');
		$this->db->from('keranjang_belanja');
		$this->db->where('created_by', $Value);

		$query = $this->db->get();
		return $query->result_array();
	}

	public function listing_pengiriman($Value = '')
	{
		$this->db->select('*');
		$this->db->from('metode_pengiriman');

		$query = $this->db->get();
		return $query->result_array();
	}

	public function get_metode_pengiriman($Value = '')
	{
		$this->db->select('*');
		$this->db->from('metode_pengiriman');
		$this->db->where('metode_pengiriman_id', $Value);

		$query = $this->db->get();
		return $query->row_array();
	}

	public function detail_chart($Value='', $id='')
	{
		$this->db->select('*');
		$this->db->from('keranjang_belanja');
		$this->db->where('created_by', $Value);
		if ($id != '0') {
			$this->db->where('status', $id);
		}
		

		$query = $this->db->get();
		return $query->row_array();
	}

	public function daftar_keranjang($id)
	{
		$this->db->select('keranjang_id');
		$this->db->from('keranjang_belanja');
		$this->db->where('status', 'Cart');
		$this->db->where('created_by', $id);

		$query = $this->db->get();
		return $query->result_array();
	}

	public function get_order_id($id)
	{
		$id+=0;
		$this->db->select('order_id');
		$this->db->from('order_list');
		$this->db->where('status', 'Cart');
		$this->db->where('user_id', $id);

		$query = $this->db->get();
		return $query->row_array();
	}

	public function get_alamat_order_id($id)
	{
		$id+=0;
		$this->db->select('order_id');
		$this->db->from('alamat_pengiriman');
		// $this->db->where('status', 'Cart');
		$this->db->where('created_by', $id);

		$query = $this->db->get();
		return $query->row_array();
	}


	public function get_order_detail($id)
	{
		$id+=0;
		$this->db->select('*');
		$this->db->from('order_list');
		$this->db->where('status', 'Cart');
		$this->db->where('order_id', $id);

		$query = $this->db->get();
		return $query->row_array();
	}


	public function get_harga_total($id)
	{
		$this->db->select('harga_total');
		$this->db->from('order_list');
		$this->db->where('status', 'Cart');
		$this->db->where('order_id', $id);

		$query = $this->db->get();
		return $query->row_array();
	}

	public function get_alamat_status($id)
	{
		$this->db->select('status');
		$this->db->from('alamat_pengiriman');
		$this->db->where('order_id', $id);

		$query = $this->db->get();
		return $query->row_array();
	}

	public function get_alamat_ID($id)
	{
		$id+=0;
		$this->db->select('alamat_id');
		$this->db->from('alamat_pengiriman');
		$this->db->where('order_id', $id);

		$query = $this->db->get();
		return $query->row_array();
	}

	public function get_alamat_detail($id)
	{
		$this->db->select('*');
		$this->db->from('alamat_pengiriman');
		$this->db->where('order_id', $id);

		$query = $this->db->get();
		return $query->row_array();
	}

	public function hapus($id='')
	{
		$this->db->where('keranjang_id', $id);	
		$this->db->delete('keranjang_belanja');
	}

}

/* End of file Shop_model.php */
/* Location: ./application/models/Shop_model.php */