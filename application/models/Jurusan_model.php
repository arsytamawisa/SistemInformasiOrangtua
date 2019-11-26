<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jurusan_model extends CI_Model 
{

	public function tampil()
	{
		$this->db->order_by('nama_jurusan', 'desc');
		return $this->db->get('jurusan')->result_array();
	}

	public function detail($id)
	{
		$this->db->where('id_jurusan', $id);
		return $this->db->get('jurusan')->row_array();
	}

	public function edit($input, $id)
	{
		$this->db->where('id_jurusan', $id);
		$this->db->update('jurusan', $input);
	}

	public function tambah($input)
	{
		$this->db->insert('jurusan', $input);
	}

	public function hapus($id)
	{
		$this->db->where('id_jurusan', $id);
		$this->db->delete('jurusan');
	}

}