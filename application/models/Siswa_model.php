<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa_model extends CI_Model 
{

	public function tampil()
	{
		return $this->db->get('siswa')->result_array();
	}

	public function jumlah()
	{
		return $this->db->get('siswa')->num_rows();
	}

	public function tambah($input)
	{
		$siswa['jenis_kelamin'] = $input['jenis_kelamin'];
		$siswa['nama_siswa'] 	= $input['nama_siswa'];
		$siswa['tgl_lahir'] 	= $input['tgl_lahir'];
		$siswa['password'] 		=sha1( $input['tgl_lahir']);
		$siswa['nis'] 			= $input['nis'];

		$this->db->insert('siswa', $siswa);
		$kelas['id_siswa'] = $this->db->insert_id('siswa');
		$kelas['id_kelas'] = $input['id_kelas'];
		$this->db->insert('detail_kelas', $kelas);
	}

	public function detail($id)
	{
		$this->db->where('id_siswa', $id);
		return $this->db->get('siswa')->row_array();
	}

	public function edit($input, $id)
	{
		$this->db->where('id_siswa', $id);
		$this->db->update('siswa', $input);
	}

	public function hapus($id)
	{
		$this->db->where('id_siswa', $id);
		$this->db->delete('siswa');
	}

}