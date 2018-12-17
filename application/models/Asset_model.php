<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Asset_model extends CI_Model {

	public function getPass($username='')
	{
		
			$this->db->select('password');
			$this->db->from('users');
			$this->db->where('name', $username);

		$query = $this->db->get();
		return $query->row_array();
	}

}

/* End of file Asset_model.php */
/* Location: ./application/models/Asset_model.php */