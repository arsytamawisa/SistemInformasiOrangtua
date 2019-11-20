<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Akun_model extends CI_Model 
{

	public function tampil()
	{
		return $this->db->get('admin')->result_array();
	}

	public function detail($id)
	{
		$this->db->where('id_admin', $id);
		return $this->db->get('admin')->row_array();
	}

	public function edit($input, $id)
	{
		$this->db->where('id_admin', $id);
		$this->db->update('admin', $input);
	}

	public function tambah($input)
	{
		$akun['username']	= $input['username'];
		$akun['password']	= sha1( $input['password']);
		$akun['nama_admin'] = $input['nama_admin'];

		$this->db->insert('admin', $akun);
		redirect('admin/akun','refresh');
	}

	public function hapus($id)
	{
		$this->db->where('id_admin', $id);
		$this->db->delete('admin');
	}

}