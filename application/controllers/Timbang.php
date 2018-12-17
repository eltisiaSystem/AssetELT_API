<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Timbang extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function index_get()
	{
		$timbangan_id = $this->get('timbangan_id');
		if ($timbangan_id == '') {
			$ternak_rfid = $this->db->get('ternak_rfid')->result();
			$bobot_ternak = $this->db->get('bobot_ternak')->result();
		}
		else {
			$this->db->where('timbangan_id', $timbangan_id);
			$ternak_rfid = $this->db->get('ternak_rfid')->result();
			$bobot_ternak = $this->db->get('bobot_ternak')->result();
		}
		$this->response($ternak_rfid,200);
	}

}

/* End of file timbang.php */
/* Location: ./application/controllers/api/timbang.php */