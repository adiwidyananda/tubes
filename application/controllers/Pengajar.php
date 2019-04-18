<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengajar extends CI_Controller {
	public function __construct(){
            parent::__construct();
            $this->load->model('M_pengajar');
            $this->load->model('M_matkul');
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
        echo "<script>alert('Pendaftaran Berhasil')</script>";
    } else {
        Echo "Data belum terdaftar. Ulangi sekali lagi".mysql_error();
    }
        $this->load->view('daftarpengajar');
         
	}
     public function modul_pengajar($username){
        $data['username'] = $username;
        $data['matkul']['pengajar'] = $this->M_matkul->get_matkul();
        $this->load->view('Modul',$data);
    }
    public function presensi_pengajar($username){
        $data['username'] = $username;
        $this->load->view('Presensi',$data);
	
    }
    public function proses_presensi(){
        $presensi = array(
            'username' => $this->input->post('username'),
            'tanggal' => $this->input->post('tanggal'),
            'materi' => $this->input->post('materi'),
            'grup' => $this->input->post('grup'),
            'jmlanggota' => $this->input->post('jumlah'),
            'hadir' => $this->input->post('hadir'),
            'keterangan' => $this->input->post('keterangan'),
            'status' => $this->input->post('status')

        );
        $data['username'] = $this->input->post('username');
        $query = $this->M_pengajar->insert_presensi($presensi);
        if ($query == true) {
        echo "<script>alert('Data berhasil diinput')</script>";
    } else {
        Echo "Data belum masuk. Ulangi sekali lagi".mysql_error();
    }
        $this->load->view('Presensi',$data);
    }
    public function logout_pengajar(){
        $this->load->view('LoginPengajar');
    
    }
    public function pembayaran_pengajar($username){
        $data['username'] = $username;
        $data['presensi']['pengajar'] = $this->M_pengajar->get_presensi($username);
        $this->load->view('pemabayaran',$data);
    }
    public function profile_pengajar($username) {
        $data['username'] = $username;
        $data['profil']['pengajar'] = $this->M_pengajar->get_pengajar_username($username);
        $this->load->view('profil',$data);
    }
    public function proses_edit(){
        $pengajar = array(
            'password' => $this->input->post('password'),
            'ttl' => $this->input->post('ttl'),
            'jurusan' => $this->input->post('jurusan'),
            'kelas' => $this->input->post('kelas'),
            'angkatan' => $this->input->post('tahun'),
            'alamat' => $this->input->post('alamat'),
            'line' => $this->input->post('line'),
            'email' => $this->input->post('email'),
            'hp' => $this->input->post('hp'),
            'facebook' => $this->input->post('facebook'),
            'instagram' => $this->input->post('instagram'),
            'bank' => $this->input->post('bank'),
            'rekening' => $this->input->post('norek')

        );
        $username = $this->input->post('username');
        $data['username'] = $username;
        $query = $this->M_pengajar->update_pengajar($username,$pengajar);
        if ($query == true) {
        echo "<script>alert('Data Berhasil Di Update')</script>";
    } else {
        Echo "Data belum terupdate. Ulangi sekali lagi".mysql_error();
    }
        $this->profile_pengajar($username);
         
    }


}