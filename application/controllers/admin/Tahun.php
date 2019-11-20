<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tahun extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model("Tahun_ajaran_model");
		
		if(!$this->session->userdata('admin') OR empty($this->session->userdata('admin'))){
			redirect('admin/login','refresh');
		}
	}

	public function index()
	{
		$data['tahun']	= $this->Tahun_ajaran_model->tampil();
		$this->load->view("templates/admin/header");
		$this->load->view("admin/tahun/tampil", $data);
		$this->load->view("templates/admin/footer");
	}

	public function tambah()
	{
		$input = $this->input->post();

		if($input)
		{
			$cek = $this->Tahun_ajaran_model->tambah($input);
			if($cek=="berhasil"){
			redirect('admin/tahun','refresh');
			}else{
				echo "<script>alert('Gagal!, Ada tahun ajaran yang masih aktif');location='".base_url("admin/tahun/tambah")."'</script>";
			}
		}
		$this->load->view("templates/admin/header");
		$this->load->view("admin/tahun/tambah");
		$this->load->view("templates/admin/footer");
	}

	public function edit($id)
	{
		$data['detail'] = $this->Tahun_ajaran_model->detail($id);
		$this->load->view("templates/admin/header");
		$this->load->view("admin/tahun/edit", $data);
		$this->load->view("templates/admin/footer");
		$input = $this->input->post();
		
		if($input)
		{
			$cek = $this->Tahun_ajaran_model->edit($input, $id);
			if($cek=="berhasil"){
			redirect('admin/tahun','refresh');
			}else{
				echo "<script>alert('Gagal!, Ada tahun ajaran yang masih aktif');location='".base_url("admin/tahun/edit/$id")."'</script>";
			}
		}
	}

	public function hapus($id)
	{
		$detail = $this->Tahun_ajaran_model->detail($id);
		$this->Tahun_ajaran_model->hapus($id);
		redirect('admin/tahun','refresh'); 
	}

}