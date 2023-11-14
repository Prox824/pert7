<?php

class model_login extends CI_Model {

    public function ambillogin($nama,$nis)
    {
        $this->input->where('nama', $nama);
        $this->input->where('nis', $nis);
        $query = $this->db->get('loginsiswa');
        if ($query->num_rows()>0){
            foreach ($query->results() as $row) {
                $class = array ('nama' => $row->$nama, 
                                'nis' => $row->nis
                );
            }
        $this->session->get_userdata($sess);
        redirect('welcome_massage');
        }
        else{
            $this->session->set_flashdata('info','MAAF nama dan nis tiak sesuai mohon diulang kembali !!');
            redirect('loginsiswa');
        }
    }
}