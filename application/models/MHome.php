<?php

class MHome extends CI_Model
{
	/*public function getDataGender()
    {
        $query = "SELECT Gender, count(*) as total FROM anggota GROUP BY Gender";

        return $this->db->query($query)->result_array();
    }
*/
	function show_transaksi()
	{
		$this->db->select('*');
		$this->db->from('detail_transaksi');
		$this->db->join('transaksi', 'transaksi.id_transaksi = detail_transaksi.id_transaksi');
		$this->db->join('buku', 'buku.ID_Buku = detail_transaksi.id_buku');
		return $this->db->get()->result_array();
	}

	public function getDataGender()
	{
		$this->db->select('Gender, COUNT(*) as total');
		$this->db->group_by('Gender');

		return $this->db->get('anggota')->result_array();
	}
	/*
    public function getDataWN()
    {
        $query = "SELECT WN, count(*) as total FROM anggota GROUP BY WN";

        return $this->db->query($query)->result_array();
    }
*/
	public function getDataWN()
	{
		$this->db->select('WN, COUNT(*) as total');
		$this->db->group_by('WN');

		return $this->db->get('anggota')->result_array();
	}

	public function getDataStatus()
	{
		$this->db->select('Status, COUNT(*) as total');
		$this->db->group_by('Status');
		return $this->db->get('anggota')->result_array();
	}

	public function getDataDbStatus()
	{
		$this->db->select('*');
		$this->db->from('status');
		return $this->db->get()->result_array();
	}

	public function getDataGenre()
	{
		$this->db->select('Genre, COUNT(*) as total');
		$this->db->group_by('Genre');
		return $this->db->get('buku')->result_array();
	}

	public function getDataDbGenre()
	{
		$this->db->select('*');
		$this->db->from('genre');
		return $this->db->get()->result_array();
	}
}
