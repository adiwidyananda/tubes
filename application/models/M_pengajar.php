<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pengajar extends CI_Model {

    public function __construct() {
        $this->load->database();
    }
    public function insert_pengajar($pengajar) {
        return $this->db->insert('pengajar', $pengajar);
    }
    public function get_pengajar_username($username) {
        $query = $this->db->get_where('pelajar', array('username' => $username));
        return $query->row_array();
    }
}