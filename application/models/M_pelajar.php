<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pelajar extends CI_Model {

    public function __construct() {
        $this->load->database();
    }
    public function insert_pelajar($pelajar) {
        return $this->db->insert('pelajar', $pelajar);
    }
    public function get_pelajar_username($username) {
        $query = $this->db->get_where('pelajar', array('username' => $username));
        return $query->row_array();
    }
}