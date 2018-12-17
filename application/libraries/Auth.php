<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth
{
	protected $CI;

	public function __construct()
	{
        $this->CI =& get_instance(); 
	}

	// Fungsi login
	public function masuk($username='', $password='')
	{
		// Melakukan query untuk mencari data sesuai dengan parameter ( $username dan $password)
		$query = $this->CI->db->get_where('users', array( 'username' => $username, 'password' => sha1($password)));

		// Jika data ditemukan
		if($query->num_rows() == 1)
		{
			// Mengambil satu baris data berdasarkan parameter ($username dan $password)
			$this->CI->db->select('*');
			$this->CI->db->from('users');
			$this->CI->db->where(array( 'username' => $username, 'password' => sha1($password)));
			$query = $this->CI->db->get();

			// Menghasilkan baris data dalam bentuk array
			$result = $query->row_array();
			// print_r($result);die();

			// Membuat variabel untuk menampung data
			$login_id		= uniqid(rand());
			$user_id		= $result['user_id'];
			$nama_lengkap	= $result['nama_lengkap'];
			$akses_level	= $result['akses_level'];
			$pasar_ternak_id= $result['pasar_ternak_id'];
			$nama_peternakan	= $result['nama_peternakan'];
			$path_file	= $result['path_file'];

			$data_session = array(
				'login_id'		=> $login_id,
				'user_id'		=> $user_id,
				'username'		=> $username,
				'nama_lengkap'	=> $nama_lengkap,
				'pasar_ternak_id'=> $pasar_ternak_id,
				'akses_level'	=> $akses_level,
				'nama_peternakan'	=> $nama_peternakan,
				'path_file' => $path_file
			);
			// Melakukan penyimpanan data kedalam session
			$this->CI->session->set_userdata($data_session);

			// redirect(base_url('admin/users'));

			//Mengalihkan ke halaman admin dashboard
			if($akses_level === "Admin")
			{
				redirect(base_url('admin/users/daftar_pasar_ternak'));
			}
			elseif($akses_level === "Peternak")
			{
				redirect(base_url('admin/daftar_ternak/daftar_ternak_peternakan/'.$nama_peternakan));
			}
			elseif ($akses_level === "Pembeli") {
				redirect(base_url('beranda'));
			}
			elseif ($akses_level === "Pasar Ternak") {
				redirect(base_url('admin/users/daftar_operator_pasar_ternak/'. $pasar_ternak_id));
			}
			elseif ($akses_level === "Operator") {
				redirect(base_url('admin/daftar_ternak/daftar_ternak_list/'.$pasar_ternak_id));
			}
			else
			{
				$this->CI->session->set_flashdata('danger', 'Opsss......!!!<br> Mau maling ya?.');
				redirect(base_url('login'));
			}
		}
		else
		{
			// Jika data tidak ditemukan, membuat pesan error
			$this->CI->session->set_flashdata('warning', 'Opsss......!!! Username/ password yang anda masukkan salah.');

			// Dialirkan ke halaman login
			redirect(base_url('login'));
		}
		return false;
	}

	// Fungsi cek login user
	public function cek_login()
	{
		// Melakukan pengecekan data username dan akses_level didalam session
		if($this->CI->session->userdata('username') == "" && $this->CI->session->userdata('akses_level') == "")
		{
			// Jika data tidak ditemukan, membuat pesan error
			$this->CI->session->set_flashdata('danger', 'Opsss......!!!<br> Anda belum login, silahkan login untuk mengakses halaman admin.');
			// Dialihkan ke halaman login
			redirect(base_url('login'));
		}
	}

	public function keluar()
	{
		// Mengambil data login pada session
		$data_session = array('login_id', 'user_id', 'username', 'nama_lengkap', 'akses_level');

		// Melakukan penghapusan pada session
		$this->CI->session->unset_userdata($data_session);

		// Menampilkan pesan setelah proses penghapusan data session berhasil
		$this->CI->session->set_flashdata('sukses', 'Terima kasih, Anda berhasil keluar dari halaman admin.');

		// Dialihkan ke halaman login
		redirect(base_url('beranda'));
	}

}

/* End of file Auth.php */
/* Location: ./application/libraries/Auth.php */
