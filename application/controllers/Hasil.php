<?php

class Hasil extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Hasil_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Hasil Pemeriksaan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['data'] = $this->Hasil_model->getAllData();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('hasil/index', $data);
        $this->load->view('templates/footer');
        // var_dump($data);
        // die();
    }

    public function hapus($id_pasien)
    {
        $this->Hasil_model->hapusDataPasien($id_pasien);
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('hasil');
    }

    public function detail($id_pasien)
    {
        $data['title'] = 'Detail Data Pasien';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['data'] = $this->Hasil_model->getPasienById($id_pasien);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('hasil/detail', $data);
        $this->load->view('templates/footer');
    }

    public function ubah($id_pasien)
    {
        $data['title'] = 'Form Ubah Data Pasien';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['data'] = $this->Hasil_model->getPasienById($id_pasien);

        $this->form_validation->set_rules('nama_pasien', 'Nama', 'required');
        $this->form_validation->set_rules('tgl_periksa', 'Tanggal', 'required');
        $this->form_validation->set_rules('keluhan', 'Keluhan', 'required');
        $this->form_validation->set_rules('diagnosa', 'Diagnosa', 'required');
        $this->form_validation->set_rules('saran', 'Saran', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('hasil/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Hasil_model->ubahDataPasien();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('hasil');
        }
    }
}
