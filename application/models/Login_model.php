<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

	function login_admin($user,$pass){
		$this->db->where('username', $user);
		$this->db->where('password', $pass);
		$ambil = $this->db->get('admin');

		$cek = $ambil->num_rows();

		if($cek==1){
			
			$akun = $ambil->row_array();
			$this->session->set_userdata('admin',$akun);

			return 'berhasil';
		}
		else{
			return 'gagal';
		}
	}

	function login_user($nis,$pass){
		$this->db->where('nis', $nis);
		$this->db->where('password', $pass);
		$ambil = $this->db->get('siswa');

		$cek = $ambil->num_rows();

		if($cek==1){
			$akun = $ambil->row_array();
			
			$this->session->set_userdata("siswa",$akun);
			return 'berhasil';
		}
		else{
			return 'gagal';
		}
	}

}

/* End of file Login_model.php */
/* Location: ./application/models/Login_model.php */