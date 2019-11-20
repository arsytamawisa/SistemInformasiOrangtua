<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();
		
		$this->load->model('Login_model');
	}

	public function index()
	{
		$this->load->view("user/login");

		$input = $this->input->post();

		if($input)
		{
		 	$username = $input['nis'];
		 	$pass = sha1($input['password']);

		 	$cek = $this->Login_model->login_user($username,$pass);
		 	if($cek=="berhasil"){
		 		redirect('dashboard','refresh');
		 	}else{
		 		redirect('','refresh');
		 	}
		}
	}

}