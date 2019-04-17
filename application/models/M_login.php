<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {

    public function __construct() {
        $this->load->database();
    }
    public function login_pelajar($username,$password) {
        $query = $this->db->query("select count(*) as ada from pelajar".
		                          " where username='$username' and password='$password'");
        return $query->row_array();
    }
    public function login_pengajar($username,$password) {
        $query = $this->db->query("select count(*) as ada from pengajar".
		                          " where username='$username' and password='$password'");
        return $query->row_array();
    }

}