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
		$this->load->model('asset_model');
		$this->load->helper('date');
	}

	public function index_get()
	{
		$api = $this->get('api');
		$api = hash ( "sha256", $api );
		$username = $this->get('username');
		$api_stored = $this->asset_model->getPass($username);

		if($api_stored['password'] === $api){
			$barcode = $this->get('barcode');
			$limit = $this->get('limit');
			if ($barcode == '' && $limit == '') {
				$assets = $this->db->get('assets')->result();
				$this->response($assets,200);
			} 
			elseif ($barcode == '' && $limit != '') {
				$assets = $this->db->get('assets',$limit)->result();
				$this->response($assets,200);
			}
			else {
				$this->db->where('barcode', $barcode);
				$assets = $this->db->get('assets')->result();
				$this->response($assets,200);
			}
		}
		else {
			$this->response(array('status' => 'fail', 502));
		}		
	}

	//Mengirim atau menambah data kontak baru
	function index_post() {
		$api = $this->post('api');
		$api = hash ( "sha256", $api );
		$username = $this->post('username');
		$api_stored = $this->asset_model->getPass($username);

		// if ($this->bcrypt->check_api($api, $api_stored)){
		if($api_stored['password'] === $api){
			$data = array(
				'name'    => $this->post('name'),
				'description'     => $this->post('description'),
				'barcode' => $this->post('barcode'),
				'category'    => $this->post('category'),
				'dept'    => $this->post('dept'),
				'room'    => $this->post('room'),
				'condition'    => $this->post('condition'),
				'value'    => $this->post('value'),
				'qty'    => $this->post('qty'),
				'total'    => $this->post('total'),
				'created_by'    => $username
			);

			$insert = $this->db->insert('assets', $data);
			if ($insert) {
				$datestring = 'Year: %Y Month: %m Day: %d - %h:%i %a';
				$time = time();
				$time2 = mdate($datestring, $time);
				$data2=array(
					'status' => 'success',
					'username' => $username,
					'updated_at' => $time2,
					'data' => $data
				);
				$this->response($data2, 200);
			}
			else {
				$this->response(array('status' => 'fail', 502));
			}
		}

		else{
			$this->response('invalid username and API Key', 200);
		}
	}

 //    //Memperbarui data kontak yang telah ada
	function index_put() {
		$api = $this->put('api');
		$api = hash ( "sha256", $api );
		$username = $this->put('username');
		$api_stored = $this->asset_model->getPass($username);

		// if ($this->bcrypt->check_api($api, $api_stored)){
		if($api_stored['password'] === $api){
			$barcode = $this->put('barcode');
			$data = array(
				'name'    => $this->put('name'),
				'description'     => $this->put('description'),
				'barcode' => $barcode,
				'category'    => $this->put('category'),
				'dept'    => $this->put('dept'),
				'room'    => $this->put('room'),
				'condition'    => $this->put('condition'),
				'value'    => $this->put('value'),
				'qty'    => $this->put('qty'),
				'total'    => $this->put('total'),
				'updated_by'    => $username
			);
			$this->db->where('barcode', $barcode);
			$update = $this->db->update('assets', $data);
			if ($update) {
				$datestring = 'Year: %Y Month: %m Day: %d - %h:%i %a';
				$time = time();
				$time2 = mdate($datestring, $time);
				$data2=array(
					'status' => 'success',
					'username' => $username,
					'updated_at' => $time2,
					'new_api' => hash(sha256, $time2 . 'ekhiw') ,
					'data' => $data
				);
				$this->response($data2, 200);
			} else {
				$this->response(array('status' => 'fail', 502));
			}
		}
		else{
			$this->response('invalid username and API Key', 200);
		}
	}

}

/* End of file timbang.php */
/* Location: ./application/controllers/api/timbang.php */