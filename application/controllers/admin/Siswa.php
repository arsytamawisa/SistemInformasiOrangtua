<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model("Siswa_model");
		$this->load->model("Tahun_ajaran_model");
		$this->load->model("Kelas_model");
		$this->load->model("Jurusan_model");
		
		if(!$this->session->userdata('admin') OR empty($this->session->userdata('admin'))){
			redirect('admin/login','refresh');
		}
	}

	public function index()
	{
		$data['siswa']	= $this->Siswa_model->tampil();
		$this->load->view("templates/admin/header");
		$this->load->view("admin/siswa/tampil", $data);
		$this->load->view("templates/admin/footer");
	}

	public function tambah()
	{
		$input = $this->input->post();

		if($input)
		{
			$this->Siswa_model->tambah($input);
			redirect('admin/siswa','refresh');
		}

		$data['tahun_ajaran']	= $this->Tahun_ajaran_model->tampil();
		$data['kelas']			= $this->Kelas_model->tampil();
		$data['jurusan']		= $this->Jurusan_model->tampil();

		$this->load->view("templates/admin/header");
		$this->load->view("admin/siswa/tambah", $data);
		$this->load->view("templates/admin/footer");
	}

	public function edit($id)
	{
		$data['detail'] = $this->Siswa_model->detail($id);
		$this->load->view("templates/admin/header");
		$this->load->view("admin/siswa/edit", $data);
		$this->load->view("templates/admin/footer");
		$input = $this->input->post();
		
		if($input)
		{
			$this->Siswa_model->edit($input, $id);
			redirect('admin/siswa','refresh'); 
		}
	}

	public function hapus($id)
	{
		$detail = $this->Siswa_model->detail($id);
		$this->Siswa_model->hapus($id);
		redirect('admin/siswa','refresh'); 
	}

	function hapus_siswa($id_detail_kelas, $id_kelas)
	{
		$this->Kelas_model->hapus_siswa($id_detail_kelas);
		redirect('admin/kelas/detail/'.$id_kelas,'refresh');
	}

}