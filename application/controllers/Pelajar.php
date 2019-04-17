<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelajar extends CI_Controller {
	public function __construct(){
            parent::__construct();
            $this->load->model('M_pelajar');
    }
	public function proses_tambah(){
        $pelajar = array(
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
            'hpwali' => $this->input->post('wali'),
            'universitas' => $this->input->post('universitas'),
            'paket' => $this->input->post('paket'),
            'matkul1' => $this->input->post('matkul1'),
            'matkul2' => $this->input->post('matkul2')

        );
		$query = $this->M_pelajar->insert_pelajar($pelajar);
        if ($query == true) {
        echo "<script>alert('Data berhasil diupdate')</script>";
    } else {
        Echo "Data anda gagal diupdate. Ulangi sekali lagi".mysql_error();
    }
        redirect('/Home/daftar');
         
	}
    public function home_pelajar(){
        $this->load->view('Hloginpelajar');
    }
	
}