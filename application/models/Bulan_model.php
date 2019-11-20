<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bulan_model extends CI_Model 
{

	public function tampil()
	{
		return $this->db->get('bulan')->result_array();
	}

}