<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jurusan_model extends CI_Model 
{

	public function tampil()
	{
		return $this->db->get('jurusan')->result_array();
    }
}