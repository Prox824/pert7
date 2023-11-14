<?php

class loginsiswa extends CI_Controller {

    public function index()
    {
        $this->load->view('view-form-loginsiswa');
    }
    public function ceklogin(){
        $nama = $this->input->post('nama');
        $nis = $this->input->post('nis');
        $this->load->model('model_login');
        $this->model_login->ambillogin($nama,$nis);
    }

    public function logout(){
        $this->session->set_userdata('nama', FALSE);
        $this->session->sess_destroy();
        redirect('loginsiswa');
    }
}