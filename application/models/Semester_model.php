<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Semester_model extends CI_Model 
{

	public function tampil()
	{
		return $this->db->get('semester')->result_array();
	}

}