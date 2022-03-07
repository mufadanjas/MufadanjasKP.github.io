<?php

class Transaksi_model extends CI_model
{
    public function getAllData()
    {
        return $this->db->get('tb_pembayaran')->result_array();
    }

    public function tambahDataPasien($id_user, $id_pasien)
    {
        $data = [
            "nama_pasien" => $this->input->post('nama_pasien', true),
            "tgl_transaksi" => $this->input->post('tgl_transaksi', true),
            "biaya" => $this->input->post('biaya', true),
            "jumlah_bayar" => $this->input->post('jumlah_bayar', true),
            "kembali" => $this->input->post('kembali', true),
            "keterangan" => $this->input->post('keterangan', true),
            "status" => 'Dibayar',
            "id_user" => $id_user,
            "id_pasien" => $id_pasien
        ];

        $this->db->insert('tb_pembayaran', $data);
    }

    // public function hapusDataPasien($no_pembayaran)
    // {
    //     // $this->db->where('id', $id);
    //     $this->db->delete('tb_pembayaran', ['no_pembayaran' => $no_pembayaran]);
    // }

    public function getPasienById($id_pasien)
    {
        return $this->db->get_where('tb_pembayaran', ['id_pasien' => $id_pasien])->row_array();
    }


    // public function getUserAkses($role_id, $id_user)
    // {
    //     $this->db->select('*');
    //     $this->db->join(
    //         'user',
    //         'tb_pasien.id_user=user.id_user',
    //         'inner'
    //     );
    //     $this->db->join(
    //         'tb_pembayaran',
    //         'tb_pasien.id_pasien=tb_pembayaran.id_pasien',
    //         'inner'
    //     );
    //     $this->db->where('user.role_id', $role_id);
    //     $this->db->where('user.id_user', $id_user);
    //     return $this->db->get('tb_pasien')->result_array();
    // }

    // public function getUserAkses()
    // {
    //     $this->db->select('*');
    //     $this->db->join(
    //         'tb_pembayaran',
    //         'tb_pemeriksaan.no_pemeriksaan=tb_pembayaran.no_pemeriksaan',
    //         'inner'
    //     );
    //     $this->db->where('tb_pemeriksaan.no_pemeriksaan', $no_pemeriksaan);

    //     return $this->db->get('tb_pembayaran')->row_array();
    // }




    // public function getPeriksaById($id_pasien)
    // {
    //     $this->db->select('*');
    //     $this->db->join(
    //         'tb_pemeriksaan',
    //         'tb_pasien.id_pasien=tb_pemeriksaan.id_pasien',
    //         'inner'
    //     );
    //     $this->db->where('tb_pasien.id_pasien', $id_pasien);

    //     return $this->db->get('tb_pasien')->row_array();
    // }
}
