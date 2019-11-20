<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mapel_model extends CI_Model {

	public function tampil()
	{
		return $this->db->get('mapel')->result_array();
	}

	public function jumlah()
	{
		return $this->db->get('detail_mapel')->num_rows();
	}

	public function tambah($input)
	{
	
		$mapel['nama_mapel']=$input['nama_mapel'];
		$mapel['kkm']=$input['kkm'];
		$this->db->insert('mapel', $mapel);
		$id_mapel = $this->db->insert_id('mapel');

		if($input['id_jurusan']=="semua"){
			$datajurusan = $this->db->get('jurusan')->result_array();

			foreach ($datajurusan as $key => $value) {
				$semua['id_mapel'] = $id_mapel;
				$semua['id_jurusan'] = $value['id_jurusan'];
				$this->db->insert('detail_mapel', $semua);
			}
		}
		else{			
			$detail['id_mapel'] = $this->db->insert_id('mapel');
			$detail['id_jurusan']=$input['id_jurusan'];
			$this->db->insert('detail_mapel',$detail);
		}
	}

	public function detail($id)
	{
		$this->db->join('mapel', 'detail_mapel.id_mapel = mapel.id_mapel', 'left');
		$this->db->where('id_detail_mapel', $id);
		return $this->db->get('detail_mapel')->row_array();
	}

	public function edit($input, $id)
	{
		$this->db->where('id_mapel', $id);
		$this->db->update('mapel', $input);
	}

	public function hapus($id)
	{
		$this->db->where('id_mapel', $id);
		$this->db->delete('mapel');
	}

	function tampil_jurusan_mapel($id)
	{
		$this->db->join('jurusan', 'detail_mapel.id_jurusan = jurusan.id_jurusan', 'left');
		$this->db->join('mapel', 'detail_mapel.id_mapel = mapel.id_mapel', 'left');
		$this->db->where('detail_mapel.id_mapel', $id);
		return $this->db->get('detail_mapel')->result_array();
	}

	function tampil_mapel_jurusan($id)
	{
		$this->db->join('jurusan', 'detail_mapel.id_jurusan = jurusan.id_jurusan', 'left');
		$this->db->join('mapel', 'detail_mapel.id_mapel = mapel.id_mapel', 'left');
		$this->db->where('detail_mapel.id_jurusan', $id);
		return $this->db->get('detail_mapel')->result_array();
	}

	function tampil_mapel()
	{
		$this->db->join('jurusan', 'detail_mapel.id_jurusan = jurusan.id_jurusan', 'left');
		$this->db->join('mapel', 'detail_mapel.id_mapel = mapel.id_mapel', 'left');
		return $this->db->get('detail_mapel')->result_array();
	}

}