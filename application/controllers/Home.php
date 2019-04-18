<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct(){
            parent::__construct();
            $this->load->model('M_matkul');
    }

	public function index(){
		$this->load->view('Home');
		// $this->load->view('Home.chunk_split(body)s');
	}
	public function paket(){
		$this->load->view('Paketbelajar');
	}
	public function login(){
		$this->load->view('LoginMahasiswa');
	}
	public function loginpengajar() {
		$this->load->view('LoginPengajar');
	} 
	public function daftar() {
		$data['matkul']['pengajar'] = $this->M_matkul->get_matkul();
		$this->load->view('pendaftaran',$data);
	}
	public function daftarpengajar() {
		$this->load->view('daftarpengajar');
	}
}
