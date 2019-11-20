<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas_model extends CI_Model {

	public function tampil()
	{
		$this->db->join('tahun_ajaran', 'tahun_ajaran.id_tahun_ajaran = kelas.id_tahun_ajaran', 'left');
		$this->db->join('tingkat', 'tingkat.id_tingkat = kelas.id_tingkat', 'left');
		$this->db->join('jurusan', 'jurusan.id_jurusan = kelas.id_jurusan', 'left');
		return $this->db->get('kelas')->result_array();
	}

	public function detail($id)
	{
		$this->db->where('id_kelas', $id);
		$this->db->join('tingkat', 'tingkat.id_tingkat = kelas.id_tingkat', 'left');
		$this->db->join('jurusan', 'jurusan.id_jurusan = kelas.id_jurusan', 'left');
		return $this->db->get('kelas')->row_array();
	}

	public function detail_kelas($id)
	{
		$this->db->where('id_detail_kelas', $id);
		return $this->db->get('detail_kelas')->row_array();
	}

	public function tampil_tahun_ajaran_aktif($id_tahun_ajaran)
	{
		$this->db->where('kelas.id_tahun_ajaran', $id_tahun_ajaran);
		$this->db->join('tahun_ajaran', 'tahun_ajaran.id_tahun_ajaran = kelas.id_tahun_ajaran', 'left');
		$this->db->join('tingkat', 'tingkat.id_tingkat = kelas.id_tingkat', 'left');
		$this->db->join('jurusan', 'jurusan.id_jurusan = kelas.id_jurusan', 'left');
		return $this->db->get('kelas')->result_array();
	}

	public function tampil_tahun_ajaran_jurusan_aktif($id_tahun_ajaran,$id_jurusan)
	{
		$this->db->where('kelas.id_tahun_ajaran', $id_tahun_ajaran);
		$this->db->where('kelas.id_jurusan', $id_jurusan);
		$this->db->join('tahun_ajaran', 'tahun_ajaran.id_tahun_ajaran = kelas.id_tahun_ajaran', 'left');
		$this->db->join('tingkat', 'tingkat.id_tingkat = kelas.id_tingkat', 'left');
		$this->db->join('jurusan', 'jurusan.id_jurusan = kelas.id_jurusan', 'left');
		return $this->db->get('kelas')->result_array();
	}

	public function hapus($id)
	{
		$this->db->where('id_kelas', $id);
		$this->db->delete('kelas');
	}

	public function hapus_siswa($id)
	{
		$this->db->where('id_detail_kelas', $id);
		$this->db->delete('detail_kelas');
	}

	public function tambah($input)
	{
		$this->db->insert('kelas', $input);
	}

	public function jumlah()
	{
		return $this->db->get('kelas')->num_rows();
	}

	function tampil_detail_kelas($id)
	{
		$this->db->join('kelas', 'detail_kelas.id_kelas = kelas.id_kelas', 'left');
		$this->db->join('siswa', 'detail_kelas.id_siswa = siswa.id_siswa', 'left');
		$this->db->where('detail_kelas.id_kelas', $id);
		return $this->db->get('detail_kelas')->result_array();
	}

	function ambil_detail_kelas($id)
	{
		$this->db->join('kelas', 'detail_kelas.id_kelas = kelas.id_kelas', 'left');
		$this->db->join('siswa', 'detail_kelas.id_siswa = siswa.id_siswa', 'left');
		$this->db->where('id_detail_kelas', $id);
		return $this->db->get('detail_kelas')->row_array();
	}

	function tampil_kelas_jurusan_tahun($id_tahun, $id_jurusan)
	{
		$this->db->join('tingkat', 'tingkat.id_tingkat = kelas.id_tingkat', 'left');
		// $this->db->join('jurusan', 'jurusan.id_jurusan = kelas.id_jurusan', 'left');
		$this->db->where('id_tahun_ajaran', $id_tahun);
		$this->db->where('id_jurusan', $id_jurusan);
		return $this->db->get('kelas')->result_array();
	}

	public function pindah_kelas($inputan)
	{
		unset($inputan['datatable_length']);

		$detail_siswa = $this->tampil_detail_kelas($inputan['id_kelas']);

		if(!empty($detail_siswa)){
			foreach ($detail_siswa as $key => $value)
			{
				foreach ($inputan['siswa'] as $id_siswa => $status)
				{
					if($value['id_siswa']!=$id_siswa)
					{
						$detail['id_siswa'] = $id_siswa;
						$detail['id_kelas'] = $inputan['id_kelas'];
						$this->db->insert('detail_kelas', $detail);
					}

				}
			}
		}else{
			foreach ($inputan['siswa'] as $id_siswa => $status)
			{
				$hasil['id_siswa'] = $id_siswa;
				$hasil['id_kelas'] = $inputan['id_kelas'];
				$this->db->insert('detail_kelas', $hasil);
			}
		}
	}

	function kelas_siswa($id_siswa){
		$this->db->order_by('id_detail_kelas', 'desc');
		$this->db->group_by('detail_kelas.id_kelas');
		$this->db->where('id_siswa', $id_siswa);
		$this->db->join('kelas', 'detail_kelas.id_kelas = kelas.id_kelas', 'left');
		$this->db->join('tahun_ajaran', 'tahun_ajaran.id_tahun_ajaran = kelas.id_tahun_ajaran', 'left');
		$this->db->join('tingkat', 'tingkat.id_tingkat = kelas.id_tingkat', 'left');
		$this->db->join('jurusan', 'jurusan.id_jurusan = kelas.id_jurusan', 'left');
		return $this->db->get('detail_kelas')->result_array();
	}

	function siswa_aktif_kelas(){

		$siswa = $this->session->userdata('siswa');
		$this->db->where('status', "Aktif");
		$this->db->where('detail_kelas.id_siswa', $siswa['id_siswa']);
		$this->db->join('kelas', 'detail_kelas.id_kelas = kelas.id_kelas', 'left');
		$this->db->join('tahun_ajaran', 'kelas.id_tahun_ajaran = tahun_ajaran.id_tahun_ajaran', 'left');
		$data = $this->db->get('detail_kelas')->row_array();
		
		return $data;
	}

}