<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tingkat_model extends CI_Model 
{

	public function tampil()
	{
		return $this->db->get('tingkat')->result_array();
    }
}