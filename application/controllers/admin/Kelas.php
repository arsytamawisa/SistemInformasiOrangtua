<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model("Kelas_model");
		$this->load->model("Tahun_ajaran_model");
		$this->load->model("Tingkat_model");
		$this->load->model("Jurusan_model");

		if(!$this->session->userdata('admin') OR empty($this->session->userdata('admin'))){
			redirect('admin/login','refresh');
		}
	}

	public function index()
	{
		if($this->input->post('tahun')){
			$data['tahun'] = $this->input->post('tahun');
			$data['kelas'] = $this->Kelas_model->tampil_tahun_ajaran_aktif($data['tahun']);
		}
		else{
			$tahun = $this->Tahun_ajaran_model->tahun_aktif("Aktif");
			$data['tahun'] = $tahun['id_tahun_ajaran'];
			$data['kelas'] = $this->Kelas_model->tampil_tahun_ajaran_aktif($data['tahun']);
		}

		$data['tahun_ajaran'] = $this->Tahun_ajaran_model->tampil();
		$this->load->view("templates/admin/header");
		$this->load->view("admin/kelas/tampil", $data);
		$this->load->view("templates/admin/footer");
	}

	function detail($id)
	{
		$data['detail_kelas']	= $this->Kelas_model->tampil_detail_kelas($id);
		$data['kelas']			= $this->Kelas_model->detail($id);
		$data['tingkat']		= $this->Tingkat_model->tampil();
		$data['jurusan']		= $this->Jurusan_model->tampil();
		$data['tahun_ajaran']	= $this->Tahun_ajaran_model->tampil_status("Aktif");
		
		$this->load->view('templates/admin/header');
		$this->load->view('admin/kelas/detail' , $data);
		$this->load->view('templates/admin/footer');

		if($this->input->post())
		{
			$id_kelas = $this->input->post('id_kelas');
			$cek = $this->Kelas_model->pindah_kelas($this->input->post());
			redirect('admin/kelas/','refresh');
			// redirect('admin/kelas/detail/'.$id_kelas,'refresh');
		}

	}

	public function tambah()
	{
		$input = $this->input->post();

		if($input)
		{
			$this->Kelas_model->tambah($input);
			redirect('admin/kelas','refresh');
		}
		
		$data['tingkat']		= $this->Tingkat_model->tampil();
		$data['jurusan']		= $this->Jurusan_model->tampil();
		$data['tahun_ajaran']	= $this->Tahun_ajaran_model->tampil_status("Aktif");

		$this->load->view("templates/admin/header");
		$this->load->view("admin/kelas/tambah", $data);
		$this->load->view("templates/admin/footer");
	}

	public function hapus($id)
	{
		$detail = $this->Kelas_model->detail($id);
		$this->Kelas_model->hapus($id);
		redirect('admin/kelas','refresh'); 
	}

	public function detail_kelas()
	{
		$id_tahun 	= $this->input->post('id_tahun');
		$id_jurusan = $this->input->post('id_jurusan');
		$data 		= $this->Kelas_model->tampil_kelas_jurusan_tahun($id_tahun, $id_jurusan);
		echo json_encode($data); 
	}

	public function hapus_siswa($id_detail_kelas,$id_kelas)
	{
		$this->Kelas_model->hapus_siswa($id);
		redirect('admin/kelas/'.$id_kelas,'refresh'); 
	}

}
