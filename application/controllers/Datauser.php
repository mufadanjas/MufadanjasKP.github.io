<?php

class Datauser extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Datauser_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Daftar Pasien';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['data'] = $this->Datauser_model->getAllData();
        // if ($this->input->post('keyword')) {
        //     $data['tb_pasien'] = $this->Mahasiswa_model->cariDataPasien();
        // }
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/index', $data);
        $this->load->view('templates/footer');
        // var_dump($data);
        // die();
    }

    public function tambah()
    {
        $data['title'] = 'Register';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['aku'] = $this->Datauser_model;

        $this->form_validation->set_rules('nama_pasien', 'Nama', 'required');
        $this->form_validation->set_rules('jenis_kelamin', 'JK', 'required');
        $this->form_validation->set_rules('no_hp', 'No Handphone', 'required|numeric');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/registration', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Datauser_model->tambahDataPasien($data['user']['id_user']);
            $this->session->set_flashdata('flash', 'Untuk Diproses');
            redirect('datauser/history');
        }
    }

    public function history()
    {
        $data['title'] = 'History';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['data'] = $this->Datauser_model->getUserAkses($data['user']['role_id'], $data['user']['id_user']);
        // if ($this->input->post('keyword')) {
        //     $data['tb_pasien'] = $this->Mahasiswa_model->cariDataPasien();
        // }
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/history', $data);
        $this->load->view('templates/footer');
        // var_dump($data);
        // die();
    }

    public function periksa()
    {
        $data['title'] = 'Hasil Periksa';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['data'] = $this->Datauser_model->getPemeriksaan($data['user']['role_id'], $data['user']['id_user']);
        // if ($this->input->post('keyword')) {
        //     $data['tb_pasien'] = $this->Mahasiswa_model->cariDataPasien();
        // }
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/hslperiksa', $data);
        $this->load->view('templates/footer');
        // var_dump($data);
        // die();
    }

    public function detail($id_pasien)
    {
        $data['title'] = 'Hasil Periksa';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['detail'] = $this->Datauser_model->getPeriksaById($id_pasien);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/detail', $data);
        $this->load->view('templates/footer');
    }

    public function infobayar()
    {
        $data['title'] = 'Informasi Pembayaran';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['data'] = $this->Datauser_model->getAllBayar($data['user']['role_id'], $data['user']['id_user']);
        // if ($this->input->post('keyword')) {
        //     $data['tb_pasien'] = $this->Data_model->cariDataPasien();
        // }
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/infobayar', $data);
        $this->load->view('templates/footer');
        // var_dump($data);
        // die();
    }

    public function detailbayar($id_pasien)
    {
        $data['title'] = 'Informasi Pembayaran';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['data'] = $this->Datauser_model->getPasienById($id_pasien);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/detailbayar', $data);
        $this->load->view('templates/footer');
    }

    public function print()
    {
        $data['tb_pembayaran'] = $this->Datauser_model->getAllPrint();
        $this->load->view('user/print_pasien', $data);
    }

    public function home()
    {
        $data['title'] = 'Home';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['data'] = $this->Datauser_model->getAllData();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/home', $data);
        $this->load->view('templates/footer');
    }
}
