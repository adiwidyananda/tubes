<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct(){
            parent::__construct();
            $this->load->model('M_login');
            $this->load->model('M_pelajar');
            $this->load->model('M_pengajar');
    }
	public function proses_login(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $hasil = $this->M_login->login_pelajar($username,$password);
        if ($hasil['ada']>0) {
            $data = $this->M_pelajar->get_pelajar_username($username);
            redirect('Pelajar/home_pelajar',$data);
        }
        else {         
            redirect('Home/login');
        }   
    }
    public function proses_login_pengajar(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $hasil = $this->M_login->login_pengajar($username,$password);
        if ($hasil['ada']>0) {
            $data = $this->M_pengajar->get_pengajar_username($username);
            redirect('Pengajar/home_pengajar',$data);
        }
        else {         
            redirect('Home/loginpengajar');
        }   
    }
	
}