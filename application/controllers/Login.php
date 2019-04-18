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
            $data['username'] = $username; 
            $this->load->view('Hloginpelajar',$data);
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
            $data['username'] = $username;
            $this->load->view('homeLogin',$data);
        }
        else {         
            redirect('Home/loginpengajar');
        }   
    }
	
}