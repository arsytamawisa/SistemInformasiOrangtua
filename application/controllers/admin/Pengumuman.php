<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengumuman extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model("Pengumuman_model");

		if(!$this->session->userdata('admin') OR empty($this->session->userdata('admin'))){
			redirect('admin/login','refresh');
		}
	}

	public function index()
	{
		$data['pengumuman'] = $this->Pengumuman_model->tampil();
		$this->load->view("templates/admin/header");
		$this->load->view("admin/pengumuman/tampil", $data);
		$this->load->view("templates/admin/footer");
	}

	public function tambah()
	{
		$input = $this->input->post();

		if($input)
		{
			$this->Pengumuman_model->tambah($input);
		}
		$this->load->view("templates/admin/header");
		$this->load->view("admin/pengumuman/tambah");
		$this->load->view("templates/admin/footer");
	}

	public function edit($id)
	{
		$data['detail'] = $this->Pengumuman_model->detail($id);
		$this->load->view("templates/admin/header");
		$this->load->view("admin/pengumuman/edit", $data);
		$this->load->view("templates/admin/footer");
		$input = $this->input->post();
		
		if($input)
		{
			$this->Pengumuman_model->edit($input, $id);
			redirect('admin/pengumuman','refresh'); 
		}
	}

	public function hapus($id)
	{
		$detail = $this->Pengumuman_model->detail($id);
		$hapus_file = $detail['berkas'];
		
		unlink("assets/berkas/$hapus_file");
		$this->Pengumuman_model->hapus($id);
		redirect('admin/pengumuman','refresh'); 
	}

}
