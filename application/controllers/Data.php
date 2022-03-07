<?php

class Data extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Data_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Data';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['data'] = $this->Data_model->getUserAkses();
        // if ($this->input->post('keyword')) {
        //     $data['tb_pasien'] = $this->Data_model->cariDataPasien();
        // }
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('data/index', $data);
        $this->load->view('templates/footer');
        // var_dump($data);
        // die();
    }

    public function tambah()
    {
        $data['title'] = 'Registration';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('nama_pasien', 'Nama', 'required');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('no_hp', 'No Handphone', 'required|numeric');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('data/registration', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Data_model->tambahDataPasien($data['user']['id_user']);
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('data');
        }
    }

    public function hapus($id_pasien)
    {
        $this->Data_model->hapusDataPasien($id_pasien);
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('data');
    }

    public function detail($id_pasien)
    {
        $data['title'] = 'Detail Data Pasien';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['data'] = $this->Data_model->getPasienById($id_pasien);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('data/detail', $data);
        $this->load->view('templates/footer');
    }

    public function ubah($id_pasien)
    {
        $data['title'] = 'Form Ubah Data Pasien';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['data'] = $this->Data_model->getPasienById($id_pasien);
        $data['keterangan'] = ['Honorarium Konsultasi / Pemeriksaan gigi dan mulut', 'Pengobatan Penyakit gusi', 'Pencabutan gigi tetap/sulung', 'Pembedahan', 'Pengobatan/perawatan Urat Syaraf gigi+Tumpatan sementara', 'Penambalan gigi dengan - dispers alloy - Composite', 'Pembersihan Karang gigi', 'Lain-Lain'];

        $this->form_validation->set_rules('nama_pasien', 'Nama', 'required');
        $this->form_validation->set_rules('no_hp', 'No Handphone', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('tgl_daftar', 'Tanggal', 'required');
        $this->form_validation->set_rules('jenis_kelamin', 'jenis', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('data/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Data_model->ubahDataPasien();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('data');
        }
    }
    public function acc($id_pasien)
    {
        $data['title'] = 'Proses Data';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->Data_model->prosesPasien($id_pasien);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('data/proses/', $data);
        $this->load->view('templates/footer');
        // var_dump($data);
        // die();
    }

    public function tambahPeriksa($id_pasien)
    {
        $data['title'] = 'Formulir Pemeriksaan Pasien';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['periksa'] = $this->Data_model->getPeriksaById($id_pasien);
        $data['pasien'] = $this->db->get_where('tb_pasien', ['id_pasien' => $id_pasien])->row_array();
        // var_dump($data['pasien']);
        // die();

        $this->form_validation->set_rules('nama_pasien', 'Nama', 'required');
        $this->form_validation->set_rules('keluhan', 'Keluhan', 'required');
        $this->form_validation->set_rules('diagnosa', 'Diagnosa', 'required');
        $this->form_validation->set_rules('saran', 'Saran', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('data/pemeriksaan', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Data_model->tambahPeriksa($id_pasien);
            $this->Data_model->updateHasilPeriksa($id_pasien);
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('hasil');
        }
    }
}
