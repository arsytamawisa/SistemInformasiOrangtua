<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model("Pengumuman_model");

		if(!$this->session->userdata('siswa') OR empty($this->session->userdata('siswa'))){
			redirect('login','refresh');
		}
	}

	public function index()
	{
		$data['pengumuman']	= $this->Pengumuman_model->tampil();
		$this->load->view("templates/user/header");
		$this->load->view("user/dashboard", $data);
		$this->load->view("templates/user/footer");
	}

	function keluar(){
		$this->session->unset_userdata('siswa');
		redirect('login','refresh');
	}

}
