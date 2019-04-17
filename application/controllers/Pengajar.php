<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengajar extends CI_Controller {
	public function __construct(){
            parent::__construct();
            $this->load->model('M_pengajar');
    }
	public function proses_tambah(){
        $pengajar = array(
            'nama' => $this->input->post('nama'),
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'ttl' => $this->input->post('ttl'),
            'jurusan' => $this->input->post('jurusan'),
            'kelas' => $this->input->post('kelas'),
            'angkatan' => $this->input->post('tahun'),
            'alamat' => $this->input->post('alamat'),
            'line' => $this->input->post('line'),
            'email' => $this->input->post('email'),
            'hp' => $this->input->post('hp'),
            'universitas' => $this->input->post('universitas'),
            'matkul' => $this->input->post('matkul'),
            'foto' => $this->input->post('foto')

        );
		$query = $this->M_pengajar->insert_pengajar($pengajar);
        if ($query == true) {
        echo "<script>alert('Data berhasil diupdate')</script>";
    } else {
        Echo "Data anda gagal diupdate. Ulangi sekali lagi".mysql_error();
    }
        redirect('/Home/daftarpengajar');
         
	}
    public function home_pengajar(){
        $this->load->view('homeLogin');
    }
	
}