<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Presensi_model extends CI_Model 
{

    function ambil_presensi_tgl($tgl,$id_detail_kelas,$id_semester)
    {
        $this->db->where('id_semester', $id_semester);
        $this->db->where('tgl', $tgl);
        $this->db->where('id_detail_kelas', $id_detail_kelas);
        return $this->db->get('presensi')->row_array();
    }

    function tampil_presensi_siswa($id_detail_kelas,$id_semester)
    {
        $this->db->where('id_semester', $id_semester);
        $this->db->where('id_detail_kelas', $id_detail_kelas);
        return $this->db->get('presensi')->result_array();
    }

    function tampil_presensi_siswa_perbulan($id_detail_kelas,$bulan)
    {
        $this->db->order_by('tgl', 'asc');
        $this->db->where('MONTH(tgl)', $bulan);
        $this->db->where('id_detail_kelas', $id_detail_kelas);
        return $this->db->get('presensi')->result_array();
    }

	public function tambah($input)
	{
		foreach ($input['status'] as $id_detail_kelas => $status) 
		{
            $presensi['id_semester'] = $input['id_semester'];
            $presensi['tgl'] = $input['tgl'];
            $presensi['status'] = $status;
            $presensi['id_detail_kelas'] = $id_detail_kelas;

            $cek = $this->ambil_presensi_tgl($input['tgl'],$id_detail_kelas,$input['id_semester']);

            if(!empty($cek))
            {
                $absen['status']=$status;
                $this->db->where('id_semester', $input['id_semester']);
                $this->db->where('id_detail_kelas', $id_detail_kelas);
                $this->db->where('tgl', $presensi['tgl']);
                $this->db->update('presensi', $absen);
            }
            else{
                $this->db->insert('presensi', $presensi);
            }
        }
    }

    function detail_presensi($inputan,$id)
    {
        $tahun = date('Y');
        $this->db->group_by('presensi.id_detail_kelas');
        $this->db->where('id_kelas', $id);
        $this->db->where('id_semester', $inputan['id_semester']);
        $this->db->where('MONTH(tgl)', $inputan['bulan']);
        $this->db->where('YEAR(tgl)', $tahun);
        $this->db->join('detail_kelas', 'presensi.id_detail_kelas = detail_kelas.id_detail_kelas', 'left');
        $this->db->join('siswa', 'detail_kelas.id_siswa = siswa.id_siswa', 'left');
        $presensi = $this->db->get('presensi')->result_array();
        $this->db->order_by('tgl', 'asc');

        $semua=array();
        foreach ($presensi as $key => $value)
        {
            $hadir = $this->db->query("SELECT COUNT(*) as total FROM presensi WHERE id_detail_kelas='$value[id_detail_kelas]' AND id_semester ='$inputan[id_semester]' AND MONTH(tgl)='$inputan[bulan]' AND YEAR(tgl)='$tahun' AND status='hadir'")->row_array();

            $sakit = $this->db->query("SELECT COUNT(*) as total FROM presensi WHERE id_detail_kelas='$value[id_detail_kelas]' AND id_semester ='$inputan[id_semester]' AND MONTH(tgl)='$inputan[bulan]' AND YEAR(tgl)='$tahun' AND status='sakit'")->row_array();

            $izin = $this->db->query("SELECT COUNT(*) as total FROM presensi WHERE id_detail_kelas='$value[id_detail_kelas]' AND id_semester ='$inputan[id_semester]' AND MONTH(tgl)='$inputan[bulan]' AND YEAR(tgl)='$tahun' AND status='izin'")->row_array();

            $alpha = $this->db->query("SELECT COUNT(*) as total FROM presensi WHERE id_detail_kelas='$value[id_detail_kelas]' AND id_semester ='$inputan[id_semester]' AND MONTH(tgl)='$inputan[bulan]' AND YEAR(tgl)='$tahun' AND status='alpha'")->row_array();

            $hasil = $this->presensi_siswa_semester_bulan($value['id_detail_kelas'],$inputan['id_semester'],$inputan['bulan']);

            $value['hadir']     = $hadir;
            $value['sakit']     = $sakit;
            $value['izin']      = $izin;
            $value['alpha']     = $alpha;
            $value['detail']    = $hasil;
            $semua[]            = $value;
        }

        return $semua;
    }

    public function presensi_siswa_semester_bulan($id_detail_kelas, $id_semester, $id_bulan)
    {
        $tahun = date('Y');
        $this->db->where('id_detail_kelas', $id_detail_kelas);
        $this->db->where('id_semester', $id_semester);
        $this->db->where('YEAR(tgl)', $tahun);
        $this->db->where('MONTH(tgl)', $id_bulan);
        $data = $this->db->get('presensi')->result_array();
        return $data;
    }

}