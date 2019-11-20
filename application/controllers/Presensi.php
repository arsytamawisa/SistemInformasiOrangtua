<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Presensi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('Kelas_model');
		$this->load->model('Semester_model');
		$this->load->model('Presensi_model');
		$this->load->model('Bulan_model');
		
		if(!$this->session->userdata('siswa') OR empty($this->session->userdata('siswa'))){
			redirect('','refresh');
		}
	}

	public function index()
	{
		$data['bulan_sekarang']=date("m");
		$siswa_kelas = $this->Kelas_model->siswa_aktif_kelas();
		$data['id_detail_kelas']=$siswa_kelas['id_detail_kelas'];
		$siswa_login = $this->session->userdata('siswa');
		$data['kelas_siswa'] = $this->Kelas_model->kelas_siswa($siswa_login['id_siswa']);

		$data['semester']=$this->Semester_model->tampil();
		$data['bulan']=$this->Bulan_model->tampil();

		$this->load->view("templates/user/header");
		$this->load->view("user/presensi",$data);
		$this->load->view("templates/user/footer");
	}

	public function hasil(){

		$bulan = $this->input->post('bulan');
		$detail_kelas = $this->input->post('id_detail_kelas');
		$data = $this->Presensi_model->tampil_presensi_siswa_perbulan($detail_kelas,$bulan);

		foreach ($data as $key => $value){

			echo "<tr>";
			echo "<td>".($key+1)."</td>";
			echo "<td>".tanggal_indo($value['tgl'], true). "</td>";
			echo "<td>".$value['status']."</td>";
			echo "</tr>";
		}
	}

	public function hasil_presensi(){

		$detail_kelas = $this->Kelas_model->siswa_aktif_kelas();
		$bulan = date("m");
		$data = $this->Presensi_model->tampil_presensi_siswa_perbulan($detail_kelas['id_detail_kelas'],$bulan);

		foreach ($data as $key => $value){

			echo "<tr>";
			echo "<td>".($key+1)."</td>";
			echo "<td>".tanggal_indo($value['tgl'], true). "</td>";
			echo "<td>".$value['status']."</td>";
			echo "</tr>";
		}
	}

}