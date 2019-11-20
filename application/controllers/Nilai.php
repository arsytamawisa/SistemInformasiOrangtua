<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nilai extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model("Nilai_model");
		$this->load->model("Semester_model");
		$this->load->model("Kelas_model");
		
		if(!$this->session->userdata('siswa') OR empty($this->session->userdata('siswa'))){
			redirect('login','refresh');
		}
	}

	public function index()
	{
		$siswa_kelas = $this->Kelas_model->siswa_aktif_kelas();
		$data['id_detail_kelas']=$siswa_kelas['id_detail_kelas'];
		$siswa_login = $this->session->userdata('siswa');
		$data['kelas_siswa'] = $this->Kelas_model->kelas_siswa($siswa_login['id_siswa']);

		$data['semester']=$this->Semester_model->tampil();
		$data['kelas']=$this->Kelas_model->tampil();
		$this->load->view("templates/user/header");
		$this->load->view("user/nilai", $data);
		$this->load->view("templates/user/footer");
	}

	public function hasil(){
		$id_detail_kelas = $this->input->post('id_detail_kelas');
		$id_semester = $this->input->post('id_semester');

		$hasil = $this->Nilai_model->nilai_siswa_semester($id_detail_kelas,$id_semester);
		foreach ($hasil as $key => $value) {
			echo "<tr>";
			echo "<td>".($key+1)."</td>";
			echo "<td>".$value['nama_mapel']."</td>";
			echo "<td>".$value['uh1']."</td>";
			echo "<td>".$value['uh2']."</td>";
			echo "<td>".$value['uh3']."</td>";
			echo "<td>".$value['tugas']."</td>";
			echo "<td>".$value['uts']."</td>";
			echo "<td>".$value['uas']."</td>";
			echo "<td>".$value['kkm']."</td>";
			echo "<td>".$value['nilai_akhir']."</td>";
			echo "</tr>";
		}
	}

	// public function hasil_nilai(){

	// 	$detail_kelas = $this->Kelas_model->siswa_aktif_kelas();
	// 	$id_semester = $this->input->post('id_semester');
	// 	$hasil = $this->Nilai_model->nilai_siswa_semester($detail_kelas['id_detail_kelas'],$id_semester);

	// 	foreach ($hasil as $key => $value){

	// 		echo "<tr>";
	// 		echo "<td>".($key+1)."</td>";
	// 		echo "<td>".$value['nama_mapel']."</td>";
	// 		echo "<td>".$value['uh1']."</td>";
	// 		echo "<td>".$value['uh2']."</td>";
	// 		echo "<td>".$value['uh3']."</td>";
	// 		echo "<td>".$value['tugas']."</td>";
	// 		echo "<td>".$value['uts']."</td>";
	// 		echo "<td>".$value['uas']."</td>";
	// 		echo "<td>".$value['kkm']."</td>";
	// 		echo "<td>".$value['nilai_akhir']."</td>";
	// 		echo "</tr>";
	// 	}
	// }

}