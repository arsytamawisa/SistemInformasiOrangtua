<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nilai extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model("Kelas_model");
		$this->load->model("Siswa_model");
		$this->load->model("Semester_model");
		$this->load->model("Mapel_model");
		$this->load->model("Nilai_model");
		$this->load->model("Jurusan_model");
		$this->load->model("Tahun_ajaran_model");

		if(!$this->session->userdata('admin') OR empty($this->session->userdata('admin'))){
			redirect('admin/login','refresh');
		}
	}

	public function index()
	{
		if($this->input->post('tahun')){
			$data['tahun']		= $this->input->post('tahun');
			$data['kelas']		= $this->Kelas_model->tampil_tahun_ajaran_aktif($data['tahun']);
			$data['prodi']		= "Semua";
		}
		else{
			$tahun = $this->Tahun_ajaran_model->tahun_aktif("Aktif");
			$data['tahun']	=$tahun['id_tahun_ajaran'];
			$data['kelas']	= $this->Kelas_model->tampil_tahun_ajaran_aktif($data['tahun']);
			$data['prodi']	="";
		}

		if($this->input->post('jurusan')){
			$data['tahun']		= $this->input->post('tahun');
			$data['prodi']		= $this->input->post('jurusan');
			if($this->input->post('jurusan')=="Semua") {
				$data['kelas']	= $this->Kelas_model->tampil_tahun_ajaran_aktif($data['tahun']);	
			} else {
				$data['kelas']	= $this->Kelas_model->tampil_tahun_ajaran_jurusan_aktif($data['tahun'],$data['prodi']);
			}
		}

		$data['jurusan'] = $this->Jurusan_model->tampil();
		$data['tahun_ajaran'] = $this->Tahun_ajaran_model->tampil();
		$this->load->view("templates/admin/header");
		$this->load->view("admin/nilai/tampil", $data);
		$this->load->view("templates/admin/footer");
	}

	public function siswa($id,$id_semester,$detail_mapel,$id_kelas)
	{
		$data['detail_kelas'] 	= $this->Kelas_model->ambil_detail_kelas($id);
		$data['mapel']			= $this->Mapel_model->tampil_mapel_jurusan($data['detail_kelas']['id_jurusan']);
		$data['semester'] 		= $this->Semester_model->tampil();


		if($this->input->post('id_detail_mapel')){		
			$data['id_detail_mapel'] 	= $this->input->post('id_detail_mapel');
			$data['id_semester']		= $this->input->post('id_semester');
			$data['nilai'] 				= $this->Nilai_model->tampil_nilaisiswa($data, $id);
		}
		else{
			$data['id_detail_mapel'] 	= $detail_mapel;
			$data['id_semester'] 		= $id_semester;
			$data['nilai'] 				= $this->Nilai_model->tampil_nilaisiswa($data, $id);
		}

		$cek = $this->input->post('simpan');
		if($cek)
		{
			$input = $this->input->post();
			unset($input['simpan']);
			$this->Nilai_model->tambah($input,$id);
			redirect("admin/nilai/detail/$id_kelas",'refresh');
		}
		
		$this->load->view("templates/admin/header");
		$this->load->view("admin/nilai/tambah", $data);
		$this->load->view("templates/admin/footer");
	}

	public function detail($id)
	{
		$data['detail_kelas'] 	= $this->Nilai_model->tampil_nilai_siswa(null,$id);
		$data['kelas']			= $this->Kelas_model->detail($id);
		$data['mapel']			= $this->Mapel_model->tampil_mapel_jurusan($data['kelas']['id_jurusan']);
		$data['semester']		= $this->Semester_model->tampil();
		$data['id_semester']	= "";
		$data['detail_mapel']	= "";
		$data['id_kelas']		= $id;

		if ( $this->input->post() )
		{
			$data['id_semester']	= $this->input->post('id_semester');
			$data['detail_mapel']	= $this->input->post('id_detail_mapel');
			$data['detail_kelas']	= $this->Nilai_model->tampil_nilai_siswa($this->input->post(),$id);
		}

		$this->load->view("templates/admin/header");
		$this->load->view("admin/nilai/detail", $data);
		$this->load->view("templates/admin/footer");
	}

}