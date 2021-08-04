<?php

class Buku extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('MBuku');
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->simple_login->cek_login();
	}
	public function index()
	{

		$data['judul'] = 'Daftar Buku';
		$data['buku'] = $this->MBuku->getData();
		$this->load->view('templates/header', $data);
		$this->load->view('buku/index', $data);
		$this->load->view('templates/footer');
	}

	public function tambahData()
	{
		$data['judul'] = "Tambah Data Buku";
		$data['genre'] = $this->MBuku->getDataGenre();
		$this->form_validation->set_rules(
			'ID',
			'ID',
			'required|min_length[5]|max_length[100]',
			array(
				'required'      => 'Anda harus mengisi kolom %s.'
			)
		);

		$this->form_validation->set_rules(
			'Judul',
			'Judul',
			'required|min_length[5]|max_length[100]',
			array(
				'required'      => 'Anda harus mengisi kolom %s.'
			)
		);
		$this->form_validation->set_rules(
			'Pengarang',
			'Pengarang',
			'required',
			array('required' => 'Anda harus mengisi kolom %s.')
		);

		$this->form_validation->set_rules(
			'Penerbit',
			'Penerbit',
			'required',
			array('required' => 'Anda harus mengisi kolom %s.')
		);

		// $this->form_validation->set_rules(
		// 	'Harga',
		// 	'Harga',
		// 	'required',
		// 	array('required' => 'Anda harus mengisi kolom %s.')
		// );

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header', $data);
			$this->load->view('buku/tambahdata');
			$this->load->view('templates/footer');
		} else {
			$this->MBuku->inputData();
			redirect('buku');
		}
	}

	public function hapus($ID)
	{
		$this->MBuku->hapusData($ID);
		redirect('buku');
	}

	public function detail($ID)
	{
		$data['judul'] = 'Detail Buku';
		$data['buku'] = $this->MBuku->getDataByJoin($ID);
		$this->load->view('templates/header', $data);
		$this->load->view('buku/detail', $data);
		$this->load->view('templates/footer');
	}

	public function editData($ID)
	{
		$data['judul'] = "Edit Data";
		$data['genre'] = $this->MBuku->getDataGenre();
		$data['buku'] = $this->MBuku->getDataById($ID);
		$this->form_validation->set_rules(
			'ID',
			'ID',
			'required|min_length[5]|max_length[100]',
			array(
				'required'      => 'Anda harus mengisi kolom %s.'
			)
		);

		$this->form_validation->set_rules(
			'Judul',
			'Judul',
			'required|min_length[5]|max_length[100]',
			array(
				'required'      => 'Anda harus mengisi kolom %s.'
			)
		);
		$this->form_validation->set_rules(
			'Pengarang',
			'Pengarang',
			'required',
			array('required' => 'Anda harus mengisi kolom %s.')
		);

		$this->form_validation->set_rules(
			'Penerbit',
			'Penerbit',
			'required',
			array('required' => 'Anda harus mengisi kolom %s.')
		);

		// $this->form_validation->set_rules(
		// 	'Harga',
		// 	'Harga',
		// 	'required',
		// 	array('required' => 'Anda harus mengisi kolom %s.')
		// );

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header', $data);
			$this->load->view('buku/editdata', $data);
			$this->load->view('templates/footer');
		} else {
			redirect('buku');
		}
	}

	public function accData()
	{
		$this->MBuku->updateData();
		redirect('buku');
	}
}
