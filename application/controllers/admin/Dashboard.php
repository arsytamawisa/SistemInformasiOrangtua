<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model("Siswa_model");
		$this->load->model("Kelas_model");
		$this->load->model("Mapel_model");
		$this->load->model("Pengumuman_model");

		if(!$this->session->userdata('admin') OR empty($this->session->userdata('admin'))){
			redirect('admin/login','refresh');
		}
	}

	public function index()
	{
		$data['pengumuman']	= $this->Pengumuman_model->tampil();
		$data['jml_siswa']	= $this->Siswa_model->jumlah();
		$data['jml_kelas']	= $this->Kelas_model->jumlah();
		$data['jml_mapel']	= $this->Mapel_model->jumlah();
		$this->load->view("templates/admin/header");
		$this->load->view("admin/dashboard", $data);
		$this->load->view("templates/admin/footer");
	}

	function keluar(){
		$this->session->unset_userdata('admin');
		redirect('admin/login','refresh');
	}

}