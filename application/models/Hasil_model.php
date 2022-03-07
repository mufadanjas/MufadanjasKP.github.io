<?php

class Hasil_model extends CI_model
{
    public function getAllData()
    {
        return $this->db->get('tb_pemeriksaan')->result_array();
    }

    public function hapusDataPasien($id_pasien)
    {
        // $this->db->where('id', $id);
        $this->db->delete('tb_pemeriksaan', ['id_pasien' => $id_pasien]);
    }

    public function getPasienById($id_pasien)
    {
        return $this->db->get_where('tb_pemeriksaan', ['id_pasien' => $id_pasien])->row_array();
    }

    public function ubahDataPasien()
    {
        $data = [
            "nama_pasien" => $this->input->post('nama_pasien', true),
            "tgl_periksa" => $this->input->post('tgl_periksa', true),
            "keluhan" => $this->input->post('keluhan', true),
            "diagnosa" => $this->input->post('diagnosa', true),
            "saran" => $this->input->post('saran', true)
        ];

        $this->db->where('id_pasien', $this->input->post('id_pasien'));
        $this->db->update('tb_pemeriksaan', $data);
        redirect('hasil');
    }
}
