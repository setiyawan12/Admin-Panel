<?php
class Pengguna extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_pengguna');
    }

    public function index()
    {
        $data['user'] = $this->M_pengguna->tampil_data()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('v_pengguna', $data);
        $this->load->view('templates/footer');
    }
    public function tambah_aksi()
    {
        $user = $this->input->post('user');
        $email = $this->input->post('email');
        $alamat = $this->input->post('alamat');
        $nik = $this->input->post('nik');
        $paket = $this->input->post('paket');
        $tagihan = $this->input->post('tagihan');


        $data = array(
            'user' => $user,
            'email' => $email,
            'alamat' => $alamat,
            'nik' => $nik,
            'paket' => $paket,
            'tagihan' => $tagihan,

        );
        $this->M_pengguna->input_data($data, 'tb_pengguna');
        redirect('pengguna');
    }
}
