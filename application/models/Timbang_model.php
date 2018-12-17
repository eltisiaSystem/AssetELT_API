<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Timbang_model extends CI_Model {

	public function get_berat()
	{
		$berat = $this->input->get('berat');
		$timbangan_id = $this->input->get('timbangan_id');
		$ternak_rfid = $this->input->get('ternak_rfid');
	}

}

/* End of file timbang_model.php */
/* Location: ./application/models/timbang_model.php */