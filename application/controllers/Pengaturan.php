<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengaturan extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model("Pengaturan_model");

		if(!$this->session->userdata('siswa') OR empty($this->session->userdata('siswa'))){
			redirect('login','refresh');
		}
	}

	public function index()
	{
		$login = $this->session->userdata('siswa');
		$input = $this->input->post();

		if($input){

			if(sha1($input['password_lama'])==$login['password'])
			{

				if($input['password_baru']==$input['password_konfirmasi'])
				{
					$this->Pengaturan_model->ubah_password_user($input['password_baru'], $login['id_siswa']);
					echo "<script> alert('Password berhasil diubah') </script>";
					redirect('pengaturan','refresh');
				}
				else
				{
					echo "<script> alert('Password konfirmasi salah') </script>";
					redirect('pengaturan','refresh');
				}
			}
			else
			{
				echo "<script> alert('Password lama salah') </script>";
				redirect('pengaturan','refresh');
			}
		}

		$this->load->view("templates/user/header");
		$this->load->view("user/pengaturan");
		$this->load->view("templates/user/footer");
	}

}