<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tahun_ajaran_model extends CI_Model 
{

	public function tampil()
	{
		$this->db->order_by('nama_tahun_ajaran', 'desc');
		return $this->db->get('tahun_ajaran')->result_array();
	}

	public function tampil_status($status)
	{
		$this->db->where('status', $status);
		return $this->db->get('tahun_ajaran')->result_array();
	}

	public function tahun_aktif($status)
	{
		$this->db->where('status', $status);
		return $this->db->get('tahun_ajaran')->row_array();
	}

	public function detail($id)
	{
		$this->db->where('id_tahun_ajaran', $id);
		return $this->db->get('tahun_ajaran')->row_array();
	}

	public function edit($input, $id)
	{
		if($input['status']=="Aktif"){
			$this->db->where('status', $input['status']);
			$cek = $this->db->get('tahun_ajaran')->row_array();
			if(!empty($cek)){
				$inputan['status']="Tidak Aktif";

				$this->db->where('id_tahun_ajaran', $cek['id_tahun_ajaran']);
				$this->db->update('tahun_ajaran', $inputan);

				$this->db->where('id_tahun_ajaran', $id);
				$this->db->update('tahun_ajaran', $input);
				return 'berhasil';
			}else{
				$this->db->where('id_tahun_ajaran', $id);
				$this->db->update('tahun_ajaran', $input);
				return 'berhasil';	
			}
		}else{
			$this->db->where('id_tahun_ajaran', $id);
			$this->db->update('tahun_ajaran', $input);
			return 'berhasil';
		}
	}

	public function tambah($input)
	{
		$this->db->where('status', "Aktif");
		$cek = $this->db->get('tahun_ajaran')->row_array();

		if(!empty($cek)){
			$inputan['status']="Tidak Aktif";

			$this->db->where('id_tahun_ajaran', $cek['id_tahun_ajaran']);
			$this->db->update('tahun_ajaran', $inputan);

			$this->db->insert('tahun_ajaran', $input);

			return 'berhasil';
		}else{

			$this->db->insert('tahun_ajaran', $input);
			return 'berhasil';
		}
	}

	public function hapus($id)
	{
		$this->db->where('id_tahun_ajaran', $id);
		$this->db->delete('tahun_ajaran');
	}

}