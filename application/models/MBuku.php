<?php

class MBuku extends CI_Model
{
	public function getData()
	{
		return $this->db->get('buku')->result_array();
	}

	public function getDataGenre()
	{
		return $this->db->get('genre')->result_array();
	}

	public function inputData()
	{
		$status = "Ada";
		$foto = $_FILES['gambar'];
		if ($foto = '') {
		} else {
			$config['upload_path'] = './assets/Gambar';
			$config['allowed_types'] = 'jpg|png|gif';

			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('gambar')) {
				echo "Upload Gagal";
				die();
			} else {
				$foto = $this->upload->data('file_name');
			}
		}
		$data = [
			"ID_Buku" => $this->input->post('ID'),
			"Judul" => $this->input->post('Judul'),
			"Pengarang" => $this->input->post('Pengarang'),
			"Penerbit" => $this->input->post('Penerbit'),
			"Genre" => $this->input->post('Genre'),
			"Tahun" => $this->input->post('Tahun'),
			// "Harga" => $this->input->post('Harga'),
			"gambar" => $foto,
			"status" => $status
		];


		$this->db->insert('buku', $data);
	}

	public function hapusData($ID)
	{
		// $this->db->where('ID_Buku', $ID);
		// $this->db->delete('buku');
		$_id = $this->db->get_where('buku', ['ID_Buku' => $ID])->row();
		$query = $this->db->delete('buku', ['ID_Buku' => $ID]);
		if ($query) {
			unlink("assets/Gambar/" . $_id->gambar);
		}
	}

	public function getDataByJoin($ID)
	{
		$this->db->select('*');
		$this->db->from('buku');
		$this->db->join('genre', 'genre.kd_genre = buku.Genre');
		$this->db->where('ID_Buku', $ID);
		return $this->db->get()->result_array();
	}

	public function getDataById($ID)
	{
		$this->db->select('*');
		$this->db->from('buku');
		$this->db->where('ID_Buku', $ID);
		return $this->db->get()->result_array();
	}

	public function updateData()
	{
		$data = [
			"Judul" => $this->input->post('Judul'),
			"Pengarang" => $this->input->post('Pengarang'),
			"Penerbit" => $this->input->post('Penerbit'),
			"Genre" => $this->input->post('Genre'),
			"Tahun" => $this->input->post('Tahun'),
			// "Harga" => $this->input->post('Harga'),
		];

		$ID = $this->input->post('ID');

		$this->db->set($data);
		$this->db->where('ID_Buku', $ID);
		$this->db->update('buku');
	}
}
