<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nilai_model extends CI_Model {

	public function tambah($input, $id)
	{
		$this->db->where('id_semester', $input['id_semester']);
		$this->db->where('id_detail_mapel', $input['id_detail_mapel']);
		$this->db->where('id_detail_kelas', $id);
		$cek = $this->db->get('nilai')->row_array();
		
		if(!empty($cek)){
			$this->db->where('id_semester', $input['id_semester']);
			$this->db->where('id_detail_mapel', $input['id_detail_mapel']);
			$this->db->where('id_detail_kelas', $id);
			$this->db->update('nilai', $input);
		}else{

			$input['id_detail_kelas'] = $id;
			$this->db->insert('nilai', $input);
		}
	}

	public function tampil_nilai_siswa($input, $id)
	{
		$this->db->where('id_kelas', $id);
		$this->db->join('siswa', 'detail_kelas.id_siswa = siswa.id_siswa', 'left');
		$siswa = $this->db->get('detail_kelas')->result_array();
		$semua_nilai_siswa = array();
		foreach ($siswa as $key => $value) 
		{
			$this->db->where('id_detail_kelas', $value['id_detail_kelas']);
			$this->db->where('id_semester', $input['id_semester']);
			$this->db->where('nilai.id_detail_mapel', $input['id_detail_mapel']);
			$this->db->join('detail_mapel', 'nilai.id_detail_mapel = detail_mapel.id_detail_mapel', 'left');
			$this->db->join('mapel', 'detail_mapel.id_mapel = mapel.id_mapel', 'left');
			$nilai = $this->db->get('nilai')->row_array();

			$value['uh1']			= $nilai['uh1'];
			$value['uh2']			= $nilai['uh2'];
			$value['uh3']			= $nilai['uh3'];
			$value['tugas']			= $nilai['tugas'];
			$value['uts']			= $nilai['uts'];
			$value['uas']			= $nilai['uas'];
			$value['nilai_akhir']	= $nilai['nilai_akhir'];
			$value['kkm']			= $nilai['kkm'];
			$semua_nilai_siswa[]	= $value;
		}
		return $semua_nilai_siswa;
	}

	public function tampil_nilaisiswa($input, $id)
	{
		$this->db->where('id_detail_mapel', $input['id_detail_mapel']);
		$this->db->where('id_semester', $input['id_semester']);
		$this->db->where('id_detail_kelas', $id);
		return $this->db->get('nilai')->row_array();
	}

	public function nilai_siswa_semester($id_detail_kelas, $id_semester)
	{
		$this->db->where('id_semester', $id_semester);
		$this->db->where('id_detail_kelas', $id_detail_kelas);
		$this->db->join('detail_mapel', 'nilai.id_detail_mapel = detail_mapel.id_detail_mapel', 'left');
		$this->db->join('mapel', 'detail_mapel.id_mapel = mapel.id_mapel', 'left');
		return $this->db->get('nilai')->result_array();
	}
	
}