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
        $query = $this->db->get_where('pengajar', array('username' => $username));
        return $query->row_array();
    }
    public function insert_presensi($presensi) {
        return $this->db->insert('presensi', $presensi);
    }
    public function get_presensi($username) {
        $query = $this->db->get_where('presensi', array('username' => $username));
        return $query;
    }
    public function update_pengajar($username,$pengajar){
        $this->db->where('username', $username);
        return $this->db->update('pengajar', $pengajar);
    }
}