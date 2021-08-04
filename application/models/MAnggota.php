<?php

class MAnggota extends CI_Model
{
    public function getData()
    {
        return $this->db->get('anggota')->result_array();
    }

    public function getDataStatus()
    {
        return $this->db->get('status')->result_array();
    }

    public function inputData()
    {
        $data = [
            "ID_Anggota" => $this->input->post('ID'),
            "Nama" => $this->input->post('Nama'),
            "Tempat_lahir" => $this->input->post('Tempat'),
            "Tanggal_lahir" => $this->input->post('Tanggal'),
            "Gender" => $this->input->post('Gender'),
            "Status" => $this->input->post('Status'),
            "WN" => $this->input->post('WN'),
            "Aktif" => $this->input->post('Aktif')
        ];


        $this->db->insert('anggota', $data);
    }

    public function hapusData($ID)
    {
        $this->db->where('ID_Anggota', $ID);
        $this->db->delete('anggota');
    }

    public function getDataByJoin($ID)
    {
        $this->db->select('*');
        $this->db->from('anggota');
        $this->db->join('status', 'status.kd_status = anggota.Status');
        $this->db->where('ID_Anggota', $ID);
        return $this->db->get()->result_array();
    }

    public function getDataById($ID)
    {
        $this->db->select('*');
        $this->db->from('anggota');
        $this->db->where('ID_Anggota', $ID);
        return $this->db->get()->result_array();
    }

    public function updateData()
    {
        $data = [
            "Nama" => $this->input->post('Nama'),
            "Tempat_lahir" => $this->input->post('Tempat'),
            "Tanggal_lahir" => $this->input->post('Tanggal'),
            "Gender" => $this->input->post('Gender'),
            "Status" => $this->input->post('Status'),
            "WN" => $this->input->post('WN')
        ];

        $ID = $this->input->post('ID');

        $this->db->set($data);
        $this->db->where('ID_Anggota', $ID);
        $this->db->update('anggota');
    }
}
