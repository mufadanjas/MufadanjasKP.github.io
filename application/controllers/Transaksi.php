<?php

class Transaksi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Transaksi_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Transaksi';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['data'] = $this->Transaksi_model->getAllData();
        // if ($this->input->post('keyword')) {
        //     $data['tb_pasien'] = $this->Data_model->cariDataPasien();
        // }
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('transaksi/index', $data);
        $this->load->view('templates/footer');
        // var_dump($data);
        // die();
    }

    public function tambah($id_pasien)
    {
        $data['title'] = 'Form Tambah Data Pembayaran';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['data'] = $this->Transaksi_model;
        $data['pasien'] = $this->db->get_where('tb_pasien', ['id_pasien' => $id_pasien])->row_array();
        // var_dump($data['pasien']);
        // die();
        $this->form_validation->set_rules('nama_pasien', 'Nama Pasien', 'required');
        $this->form_validation->set_rules('tgl_transaksi', 'Tanggal Transaksi', 'required');
        $this->form_validation->set_rules('biaya', 'Biaya', 'required');
        $this->form_validation->set_rules('jumlah_bayar', 'Jumlah Bayar', 'required');
        $this->form_validation->set_rules('kembali', 'Kembali', 'required');
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('transaksi/nota', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Transaksi_model->tambahDataPasien($data['pasien']['id_user'], $data['pasien']['id_pasien']);
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('transaksi');
        }
    }

    // public function hapus($no_pembayaran)
    // {
    //     $this->Transaksi_model->hapusDataPasien($no_pembayaran);
    //     $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    //     $this->session->set_flashdata('flash', 'Dihapus');
    //     redirect('transaksi');
    // }

    public function detail($id_pasien)
    {
        $data['title'] = 'Detail Data Pasien';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['data'] = $this->Transaksi_model->getPasienById($id_pasien);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('transaksi/detail', $data);
        $this->load->view('templates/footer');
    }

    public function print()
    {
        $data['tb_pembayaran'] = $this->Transaksi_model->getAllData();
        $this->load->view('transaksi/print_pasien', $data);
    }
}
