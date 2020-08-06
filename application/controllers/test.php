<?php
class Pengguna extends CI_Controller
{

    public function index()
    {
        $data['pengguna'] = $this->M_pengguna->tampil_data()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/footer');
        $this->load->view('pengguna', $data);
    }
}
