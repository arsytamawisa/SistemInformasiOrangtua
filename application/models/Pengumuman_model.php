<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengumuman_model extends CI_Model {

	public function tampil()
	{
		$this->db->order_by('tgl', 'desc');
		return $this->db->get('pengumuman')->result_array();
	}

	public function detail($id)
	{
		$this->db->where('id_pengumuman', $id);
		return $this->db->get('pengumuman')->row_array();
	}

	public function tambah($input)
	{
		$config['upload_path'] = './assets/berkas/';
		$config['allowed_types'] = 'jpeg|jpg|png|doc|docx|pdf|ppt|pptx';
		$config['max_size']  = '2000';
		
		$this->load->library('upload', $config);
		if (! $this->upload->do_upload('berkas'))
		{
			$error = $this->upload->display_errors();
			echo "<script>alert('File yang anda upload ukuran terlalu besar atau format berbeda');</script>";
		}
		else{

			$input['berkas'] = $this->upload->data('file_name');
			$input['tgl'] = date("Y-m-d");
			$this->db->insert('pengumuman', $input);
			redirect('admin/pengumuman','refresh');
		}
	}

	public function edit($input, $id)
	{
		$config['upload_path'] = './assets/berkas/';
		$config['allowed_types'] = 'jpeg|jpg|png|doc|docx|pdf|ppt|pptx';
		$config['max_size']  = '2048';

		$this->load->library('upload', $config);
		
		$datalama = $this->detail($id);

		if($this->upload->do_upload('berkas'))
		{
			if( file_exists("./assets/berkas/$datalama[berkas]") )
			{
				unlink("./assets/berkas/$datalama[berkas]");
			}

			$input['berkas'] = $this->upload->data('file_name');
		}

		$input['tgl'] = date("Y-m-d");
		$this->db->where('id_pengumuman', $id);
		$this->db->update('pengumuman', $input);
	}

	public function hapus($id)
	{
		$this->db->where('id_pengumuman', $id);
		$this->db->delete('pengumuman');
	}


}