<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jurusan extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model("Jurusan_model");
		
		if(!$this->session->userdata('admin') OR empty($this->session->userdata('admin'))){
			redirect('admin/login','refresh');
		}
	}

	public function index()
	{
		$data['jurusan'] = $this->Jurusan_model->tampil();
		$this->load->view("templates/admin/header");
		$this->load->view("admin/jurusan/tampil", $data);
		$this->load->view("templates/admin/footer");
	}

	public function tambah()
	{
		$input = $this->input->post();

		if($input)
		{
			$this->Jurusan_model->tambah($input);
			redirect('admin/jurusan','refresh');
		}
		$this->load->view("templates/admin/header");
		$this->load->view("admin/jurusan/tambah");
		$this->load->view("templates/admin/footer");
	}

	public function edit($id)
	{
		$data['detail'] = $this->Jurusan_model->detail($id);
		$this->load->view("templates/admin/header");
		$this->load->view("admin/jurusan/edit", $data);
		$this->load->view("templates/admin/footer");
		$input = $this->input->post();
		
		if($input)
		{
			$this->Jurusan_model->edit($input, $id);
			redirect('admin/jurusan','refresh');
		}
	}

	public function hapus($id)
	{
		$detail = $this->Jurusan_model->detail($id);
		$this->Jurusan_model->hapus($id);
		redirect('admin/jurusan','refresh'); 
	}

}