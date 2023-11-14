<?php
class inputsiswa extends CI_Controller
{
    public function index()
    {
        $this->load->view('view-form-inputsiswa');
    }

    public function cetak()
    {
        $this->form_validation->set_rules('nama', 'nama siswa', 'required|min_length[3]', [
            'required' => 'nama siswa Harus DiIsi',
        ]);

        $this->form_validation->set_rules('nis', 'nis siswa', 'required|min_length[3]', [
            'required' => 'nis siswa Harus DiIsi',
        ]);

        if ($this->form_validation->run() != true)
        {
            $this->load->view('view-form-inputsiswa');
        }
        else
        {
            $data = [
                'nama' => $this->input->post('nama'),
                'nis' => $this->input->post('nis'),
                'kelas' => $this->input->post('kelas'),
                'agama' => $this->input->post('agama')
            ];
            $this->load->view('View-data-inputsiswa', $data);
        }
    }
}