<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Presensi extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model("Kelas_model");
		$this->load->model("Siswa_model");
		$this->load->model("Presensi_model");
		$this->load->model("Semester_model");
		$this->load->model("Bulan_model");
		$this->load->model("Tahun_ajaran_model");
		$this->load->model("Jurusan_model");
		
		if(!$this->session->userdata('admin') OR empty($this->session->userdata('admin'))){
			redirect('admin/login','refresh');
		}
	}

	public function index()
	{
		if($this->input->post('tahun')){
			$data['tahun']	= $this->input->post('tahun');
			$data['kelas']	= $this->Kelas_model->tampil_tahun_ajaran_aktif($data['tahun']);
			$data['prodi']	= "Semua";
		}
		else{
			$tahun = $this->Tahun_ajaran_model->tahun_aktif("Aktif");
			$data['tahun']	= $tahun['id_tahun_ajaran'];
			$data['kelas']	= $this->Kelas_model->tampil_tahun_ajaran_aktif($data['tahun']);
			$data['prodi']	= "";
		}

		if($this->input->post('jurusan'))
		{
			$data['tahun']	= $this->input->post('tahun');
			$data['prodi']	= $this->input->post('jurusan');

			if($this->input->post('jurusan')=="Semua")
			{
				$data['kelas']	= $this->Kelas_model->tampil_tahun_ajaran_aktif($data['tahun']);
			}
			else
			{
				$data['kelas']	= $this->Kelas_model->tampil_tahun_ajaran_jurusan_aktif($data['tahun'],$data['prodi']);
			}
		}

		$data['jurusan']	= $this->Jurusan_model->tampil();
		$data['tahun_ajaran'] = $this->Tahun_ajaran_model->tampil();
		$this->load->view("templates/admin/header");
		$this->load->view("admin/presensi/tampil", $data);
		$this->load->view("templates/admin/footer");
	}

	public function tambah($id_kelas)
	{
		$data['siswa'] = $this->Kelas_model->tampil_detail_kelas($id_kelas);
		$data['semester'] = $this->Semester_model->tampil();

		if ( $this->input->post() )
		{
			$this->Presensi_model->tambah($this->input->post());
			redirect('admin/presensi/detail/'.$id_kelas,'refresh');
		}

		$this->load->view("templates/admin/header");
		$this->load->view("admin/presensi/tambah", $data);
		$this->load->view("templates/admin/footer");
	}

	function detail($id)
	{
		$data['detail_kelas'] 	= $this->Kelas_model->tampil_detail_kelas($id);
		$data['kelas'] 			= $this->Kelas_model->detail($id);
		$data['semester'] 		= $this->Semester_model->tampil();
		$data['bulan'] 			= $this->Bulan_model->tampil();
		$data['presensi'] 		= array();
		$data['id_semester']	= "";
		$data['detail_bulan']	= "";

		if ( $this->input->post())
		{
			$data['id_semester'] 	= $this->input->post('id_semester');
			$data['detail_bulan']	= $this->input->post('bulan');
			$data['presensi'] 		= $this->Presensi_model->detail_presensi($this->input->post(),$id);
		}

		$this->load->view('templates/admin/header');
		$this->load->view('admin/presensi/detail', $data);
		$this->load->view('templates/admin/footer');
	}

}