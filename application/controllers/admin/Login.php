<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		$this->load->model('Login_model');
	}

	public function index()
	{

		$this->load->view("admin/login");

		$input = $this->input->post();
		if($input)
		{
			$username = $input['username'];
			$pass = sha1($input['pass']);

			$cek = $this->Login_model->login_admin($username,$pass);
			if($cek=="berhasil")
			{
				redirect('admin/dashboard','refresh');
			}
			else
			{
				redirect('admin/login','refresh');
			}
		}
	}

}

// public function index()
// {
// 	if(isset($_COOKIE)){
// 		$data['username']=$_COOKIE['username'];
// 		$data['password']=$_COOKIE['password'];
// 	}else{
// 		$data['username']="";
// 		$data['password']="";
// 	}

// 	$this->load->view("admin/login",$data);

// 	$input = $this->input->post();
// 	if($input)
// 	{
// 		$username = $input['username'];
// 		$pass = sha1($input['pass']);

// 		$cek = $this->Login_model->login_admin($username,$pass);
// 		if($cek=="berhasil")
// 		{
// 			if(!empty($input['remember'])){
// 				$this->input->set_cookie('username',$username, 86500);
// 				$this->input->set_cookie('password',$input['pass'], 86500);
// 			}
// 			redirect('admin/dashboard','refresh');
// 		}
// 		else
// 		{
// 			delete_cookie('username');
// 			delete_cookie('password');
// 			redirect('admin/login','refresh');
// 		}
// 	}
// }