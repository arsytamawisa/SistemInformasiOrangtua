<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengaturan_model extends CI_Model {

	function ubah_password_admin($pass, $id){
		$input['password'] = sha1($pass);

		$this->db->where('id_admin', $id);
		$this->db->update('admin', $input);
	}

	function ubah_password_user($pass, $id){
		$input['password'] = sha1($pass);

		$this->db->where('id_siswa', $id);
		$this->db->update('siswa', $input);
	}

}

/* End of file Pengaturan_model.php */
/* Location: ./application/models/Pengaturan_model.php */