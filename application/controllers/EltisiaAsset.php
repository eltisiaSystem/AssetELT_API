<?php
defined('BASEPATH') OR exit('No direct script access allowed');


require APPPATH . '/libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';
use Restserver\Libraries\REST_Controller;

class Asset extends REST_Controller {

	public function __construct($config = 'rest')
	{
		parent::__construct($config);
		$this->load->database();
		$this->load->model('daftar_ternak_model');
	}

	public function index_get()
	{
		$pasar_ternak_id = $this->get('pasar_ternak_id');
		if ($pasar_ternak_id == '') {
			$daftar_ternak = $this->db->get('daftar_ternak')->result();
			$this->response($daftar_ternak,200);
		}
		else {
			$this->db->where('pasar_ternak_id', $pasar_ternak_id);
			$daftar_ternak = $this->db->get('daftar_ternak')->result();
			$this->response($daftar_ternak,200);
		}
		
	}

	//Mengirim atau menambah data kontak baru
	function index_post() {

		$data = array(
                    'timbangan_id'    => $this->post('timbangan_id'),
                    'ternak_rfid'     => $this->post('ternak_rfid'),
                    'pasar_ternak_id' => $this->post('pasar_ternak_id'),
                    'bobot_ternak'    => $this->post('bobot_ternak'));

		$last_daftar_ternak_id = $this->daftar_ternak_model->listing_last('daftar_ternak_id',$data['ternak_rfid']);

		$last_ternak_rfid = $this->daftar_ternak_model->listing_last('ternak_rfid',$data['ternak_rfid']);
		$last_inisial_ternak = $this->daftar_ternak_model->listing_last('inisial_ternak',$data['ternak_rfid']);

		$i = count($last_ternak_rfid);

		if($i == 0){
			$insert = $this->db->insert('daftar_ternak', $data);
			$daftar_ternak_id = $this->daftar_ternak_model->listing_last_id('daftar_ternak_id');
			$this->response(array(
				'add_db' => true,
            	'data' => $data,
            	'daftar_ternak_id' => $daftar_ternak_id
            ), 200);
		}
		else{
			$harga_ternak = $this->post('bobot_ternak') * 30000;
			$data2 = array(
				'timbangan_id'           => $this->post('timbangan_id'),
				'ternak_rfid'          => $this->post('ternak_rfid'),
				'pasar_ternak_id'	=> $this->post('pasar_ternak_id'),
				'bobot_ternak'    => $this->post('bobot_ternak'),
				'status_ternak'	=> 'Tersedia',
				'harga_ternak'	=> $harga_ternak
			);

			$this->db->where('ternak_rfid', $data2['ternak_rfid']);
			$insert = $this->db->update('daftar_ternak', $data2);
			$this->response(array(
				'update_db' => true,
				'data' => $data2,
				'inisial_ternak' => $last_inisial_ternak,
				'last_daftar_ternak_id' => $last_daftar_ternak_id,
				'last_ternak_rfid' => $i
			), 200);
		}


        // $insert = $this->db->insert('daftar_ternak', $data);
        // if ($insert) {
            // $this->response(array(
            // 	'data' => $data,
            // 	'last_daftar_ternak_id' => $last_daftar_ternak_id,
            // 	'last_ternak_rfid' => $i
            // ), 200);
        // } else {
        //     $this->response(array('status' => 'fail', 502));
        // }
    }

    //Memperbarui data kontak yang telah ada
	function index_put() {
        $ternak_rfid = $this->put('ternak_rfid');
        $data =array(
                    'timbangan_id'           => $this->put('timbangan_id'),
                    'ternak_rfid'          => $this->put('ternak_rfid'),
                    'pasar_ternak_id'	=> $this->put('pasar_ternak_id'),
                    'bobot_ternak'    => $this->put('bobot_ternak'));
        $this->db->where('ternak_rfid', $ternak_rfid);
        $update = $this->db->update('daftar_ternak', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

}

/* End of file timbang.php */
/* Location: ./application/controllers/api/timbang.php */