<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_matkul extends CI_Model {

    public function __construct() {
        $this->load->database();
    }
    public function get_matkul() {
        $query = $this->db->get('Matkul');
        return $query;
    }
   

}