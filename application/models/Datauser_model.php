<?php

class Datauser_model extends CI_model
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

    public function getUserAkses($role_id, $id_user)
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
        $this->db->where('user.role_id', $role_id);
        $this->db->where('user.id_user', $id_user);
        return $this->db->get('tb_pasien')->result_array();
    }

    public function getPeriksaById($id_pasien)
    {
        return $this->db->get_where('tb_pemeriksaan', ['id_pasien' => $id_pasien])->row_array();
    }

    public function getPemeriksaan($role_id, $id_user)
    {
        $this->db->select('*');
        $this->db->join(
            'user',
            'tb_pasien.id_user=user.id_user',
            'inner'
        );
        $this->db->join(
            'tb_pemeriksaan',
            'tb_pasien.id_pasien=tb_pemeriksaan.id_pasien',
            'inner'
        );
        $this->db->where('user.role_id', $role_id);
        $this->db->where('user.id_user', $id_user);
        return $this->db->get('tb_pasien')->result_array();
    }

    public function getAllBayar($role_id, $id_user)
    {
        $this->db->select('*');
        $this->db->join(
            'user',
            'tb_pasien.id_user=user.id_user',
            'inner'
        );
        $this->db->join(
            'tb_pembayaran',
            'tb_pasien.id_pasien=tb_pembayaran.id_pasien',
            'inner'
        );
        $this->db->where('user.role_id', $role_id);
        $this->db->where('user.id_user', $id_user);
        return $this->db->get('tb_pasien')->result_array();
    }

    public function getPasienById($id_pasien)
    {
        return $this->db->get_where('tb_pembayaran', ['id_pasien' => $id_pasien])->row_array();
    }

    public function getAllPrint()
    {
        return $this->db->get('tb_pembayaran')->result_array();
    }
}
