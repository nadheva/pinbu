<?php
class MCart extends CI_Model
{

	function get_all_produk()
	{
		$hasil = $this->db->where('status', 'Ada')
			->get('buku');
		return $hasil->result();
	}

	function submitpembelian($data)
	{
		$this->db->insert('transaksi', $data);
	}

	function submitdetailpembelian($data)
	{
		$this->db->insert('detail_transaksi', $data);
	}

	function find($id)
	{
		$result = $this->db->where('ID_Buku', $id)
			->limit(1)
			->get('buku');

		if ($result->num_rows() > 0) {
			return $result->row();
		} else {
			return array();
		}
	}

	function ambil_detail($ID)
	{
		$this->db->select('*');
		$this->db->from('detail_transaksi');
		$this->db->where('id_transaksi', $ID);
		return $this->db->get()->result_array();
	}
}
