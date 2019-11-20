<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengaturan extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model("Pengaturan_model");

		if(!$this->session->userdata('admin') OR empty($this->session->userdata('admin'))){
			redirect('admin/login','refresh');
		}
	}

	public function index()
	{
		$login = $this->session->userdata('admin');
		$input = $this->input->post();

		if($input){

			if(sha1($input['password_lama'])==$login['password'])
			{

				if($input['password']==$input['konfirmasi'])
				{
					$this->Pengaturan_model->ubah_password_admin($input['password_baru'], $login['id_admin']);
					echo "<script> alert('Password berhasil diubah') </script>";
					redirect('admin/pengaturan','refresh');
				}
				else
				{
					echo "<script> alert('Password konfirmasi salah') </script>";
					redirect('admin/pengaturan','refresh');
				}
			}
			else
			{
				echo "<script> alert('Password lama salah') </script>";
				redirect('admin/pengaturan','refresh');
			}
		}

		$this->load->view("templates/admin/header");
		$this->load->view("admin/pengaturan");
		$this->load->view("templates/admin/footer");
	}

}