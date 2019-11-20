<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Akun extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->load->model("Akun_model");
		
		if(!$this->session->userdata('admin') OR empty($this->session->userdata('admin'))){
			redirect('admin/login','refresh');
		}
	}
	
	public function index()
	{
		$data['akun'] = $this->Akun_model->tampil();
		$this->load->view("templates/admin/header");
		$this->load->view("admin/akun/tampil", $data);
		$this->load->view("templates/admin/footer");
	}
	
	public function tambah()
	{
		$input = $this->input->post();

		if($input)
		{
			if($input['password']==$input['konfirmasi']){	
				$this->Akun_model->tambah($input);
				redirect('admin/akun','refresh');
			}	
			else{
				echo "<script> alert('Password konfirmasi salah') </script>";
				redirect('admin/akun/tambah','refresh');
			}
		}
		$this->load->view("templates/admin/header");
		$this->load->view("admin/akun/tambah");
		$this->load->view("templates/admin/footer");
	}
	
	public function edit($id)
	{
		$data['detail'] = $this->Akun_model->detail($id);
		$this->load->view("templates/admin/header");
		$this->load->view("admin/akun/edit", $data);
		$this->load->view("templates/admin/footer");
		$input = $this->input->post();
		
		if($input)
		{
			$this->Akun_model->edit($input, $id);
			redirect('admin/akun','refresh'); 
		}
	}
	
	public function hapus($id)
	{
		$detail = $this->Akun_model->detail($id);
		$this->Akun_model->hapus($id);
		redirect('admin/akun','refresh'); 
	}
	
}