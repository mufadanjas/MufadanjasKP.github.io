<?php

class Data_model extends CI_model
{
    public function getAllData()
    {
        return $this->db->get('tb_pasien')->result_array();
    }

    public function tambahDataPasien($id_user)
    {
        $data = [
            "nama_pasien" => $this->input->post('nama_pasien', true),
            "jenis_kelamin" => $this->input->post('jenis_kelamin', true),
            "alamat" => $this->input->post('alamat', true),
            "no_hp" => $this->input->post('no_hp', true),
            "keterangan" => $this->input->post('keterangan', true),
            "tgl_daftar" => $this->input->post('tgl_daftar', true),
            "id_user" => $id_user
        ];

        $this->db->insert('tb_pasien', $data);
    }

    public function hapusDataPasien($id_pasien)
    {
        // $this->db->where('id', $id);
        $this->db->delete('tb_pasien', ['id_pasien' => $id_pasien]);
    }

    public function getPasienById($id_pasien)
    {
        return $this->db->get_where('tb_pasien', ['id_pasien' => $id_pasien])->row_array();
    }

    public function ubahDataPasien()
    {
        $data = [
            "nama_pasien" => $this->input->post('nama_pasien', true),
            "jenis_kelamin" => $this->input->post('jenis_kelamin', true),
            "alamat" => $this->input->post('alamat', true),
            "no_hp" => $this->input->post('no_hp', true),
            "keterangan" => $this->input->post('keterangan', true),
            "tgl_daftar" => $this->input->post('tgl_daftar', true),
        ];

        $this->db->where('id_pasien', $this->input->post('id_pasien'));
        $this->db->update('tb_pasien', $data);
        redirect('data');
    }

    public function getUserAkses()
    {
        $this->db->select('*');
        $this->db->join(
            'user',
            'tb_pasien.id_user=user.id_user',
            'inner'
        );
        $this->db->join(
            'tb_tindakan',
            'tb_pasien.id_pasien=tb_tindakan.id_pasien',
            'inner'
        );
        return $this->db->get('tb_pasien')->result_array();
    }

    // public function getPemeriksaan()
    // {
    //     return $this->db->get('tb_pembayaran')->result_array();
    // }
    public function prosesPasien($id_pasien)
    {
        $data = [
            "status" => 'Success',
            "tgl_tindakan" => date('Y-m-d'),
        ];
        $this->db->where('id_pasien', $id_pasien);
        $this->db->update('tb_tindakan', $data);
        redirect('data');
    }

    public function getPeriksaById($id_pasien)
    {
        $this->db->select('*');
        $this->db->join(
            'tb_pemeriksaan',
            'tb_pasien.id_pasien=tb_pemeriksaan.id_pasien',
            'inner'
        );
        $this->db->where('tb_pasien.id_pasien', $id_pasien);

        return $this->db->get('tb_pasien')->row_array();
    }


    public function tambahPeriksa($id_pasien)
    {
        $data = [
            "nama_pasien" => $this->input->post('nama_pasien', true),
            "tgl_periksa" => $this->input->post('tgl_periksa', true),
            "keluhan" => $this->input->post('keluhan', true),
            "diagnosa" => $this->input->post('diagnosa', true),
            "saran" => $this->input->post('saran', true),
            "id_pasien" => $id_pasien
        ];
        $this->db->insert('tb_pemeriksaan', $data);
        redirect('hasil');
        // var_dump($data);
        // die();
    }

    public function updateHasilPeriksa($id_pasien)
    {
        $data = [
            "hasil_pemeriksaan" => "Selesai"
        ];
        $this->db->where('id_pasien', $id_pasien);
        $this->db->update('tb_tindakan', $data);
    }

    public function data_pasien()
    {
        return $this->db->get('tb_pasien')->num_rows();
    }

    public function data_periksa()
    {
        return $this->db->get('tb_pemeriksaan')->num_rows();
    }

    public function data_bayar()
    {
        return $this->db->get('tb_pembayaran')->num_rows();
    }
}
