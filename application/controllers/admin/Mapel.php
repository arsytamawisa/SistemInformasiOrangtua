<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mapel extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model("Mapel_model");
		$this->load->model("Jurusan_model");

		if(!$this->session->userdata('admin') OR empty($this->session->userdata('admin'))){
			redirect('admin/login','refresh');
		}
	}

	public function index()
	{
		
		$data['jurusan'] = $this->Jurusan_model->tampil();
		
		if($this->input->post('id_jurusan')){
			
			$data['id_jurusan'] = $this->input->post('id_jurusan');

			if($this->input->post('id_jurusan')!="semua"){
				$data['mapel_jurusan'] = $this->Mapel_model->tampil_mapel_jurusan($this->input->post('id_jurusan'));
			}
			else{
				$data['mapel_jurusan'] = $this->Mapel_model->tampil_mapel();
			}
		}
		else{
			$data['id_jurusan'] = "";
			$data['mapel_jurusan'] = $this->Mapel_model->tampil_mapel();
		}
		
		$this->load->view("templates/admin/header");
		$this->load->view("admin/mapel/tampil", $data);
		$this->load->view("templates/admin/footer");
	}

	public function tambah()
	{
		$input = $this->input->post();
		$data['jurusan'] = $this->Jurusan_model->tampil();

		if($input)
		{
			$this->Mapel_model->tambah($input);
			redirect('admin/mapel','refresh');
		}
		$this->load->view("templates/admin/header");
		$this->load->view("admin/mapel/tambah", $data);
		$this->load->view("templates/admin/footer");
	}

	public function edit($id)
	{
		$data['detail'] = $this->Mapel_model->detail($id);
		$this->load->view("templates/admin/header");
		$this->load->view("admin/mapel/edit", $data);
		$this->load->view("templates/admin/footer");
		$input = $this->input->post();
		
		if($input)
		{
			$this->Mapel_model->edit($input, $id);
			redirect('admin/mapel','refresh'); 
		}
	}

	public function hapus($id)
	{
		$detail = $this->Mapel_model->detail($id);
		$this->Mapel_model->hapus($id);
		redirect('admin/mapel','refresh'); 
	}

	function detail($id)
	{
		$data['detail_mapel'] = $this->Mapel_model->tampil_mapel_jurusan($id);
		// $data['mapel'] = $this->Mapel_model->detail($id);
		$data['jurusan']=$id;
		$this->load->view('templates/admin/header');
		$this->load->view('admin/mapel/detail' , $data);
		$this->load->view('templates/admin/footer');
	}

}