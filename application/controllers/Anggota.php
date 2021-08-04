<?php

class Anggota extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('MAnggota');
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->simple_login->cek_login();
	}
	public function index()
	{

		$data['judul'] = 'Daftar Anggota';
		$data['anggota'] = $this->MAnggota->getData();
		$this->load->view('templates/header', $data);
		$this->load->view('anggota/index', $data);
		$this->load->view('templates/footer');
	}

	public function tambahData()
	{
		$data['judul'] = "Tambah Data Anggota";
		$data['status'] = $this->MAnggota->getDataStatus();
		$this->form_validation->set_rules(
			'ID',
			'ID',
			'required|min_length[5]|max_length[100]',
			array(
				'required'      => 'Anda harus mengisi kolom %s.'
			)
		);

		$this->form_validation->set_rules(
			'Nama',
			'Nama',
			'required|min_length[5]|max_length[100]',
			array(
				'required'      => 'Anda harus mengisi kolom %s.'
			)
		);
		$this->form_validation->set_rules(
			'Tempat',
			'Tempat Lahir',
			'required',
			array('required' => 'Anda harus mengisi kolom %s.')
		);

		$this->form_validation->set_rules(
			'Tanggal',
			'Tanggal Lahir',
			'required',
			array('required' => 'Anda harus mengisi kolom %s.')
		);

		$this->form_validation->set_rules(
			'Gender',
			'Gender',
			'required',
			array('required' => 'Anda harus mengisi kolom %s.')
		);

		$this->form_validation->set_rules(
			'Status',
			'Status',
			'required',
			array('required' => 'Anda harus mengisi kolom %s.')
		);

		$this->form_validation->set_rules(
			'WN',
			'Kewarganegaraan',
			'required',
			array('required' => 'Anda harus mengisi kolom %s.')
		);

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header', $data);
			$this->load->view('anggota/tambahdata');
			$this->load->view('templates/footer');
		} else {
			$this->MAnggota->inputData();
			redirect('anggota');
		}
	}

	public function hapus($ID)
	{
		$this->MAnggota->hapusData($ID);
		redirect('anggota');
	}

	public function detail($ID)
	{
		$data['judul'] = 'Detail Buku';
		$data['anggota'] = $this->MAnggota->getDataByJoin($ID);
		$this->load->view('templates/header', $data);
		$this->load->view('anggota/detail', $data);
		$this->load->view('templates/footer');
	}

	public function editData($ID)
	{
		$data['judul'] = "Edit Data";
		$data['status'] = $this->MAnggota->getDataStatus();
		$data['anggota'] = $this->MAnggota->getDataById($ID);
		$this->form_validation->set_rules(
			'ID',
			'ID',
			'required|min_length[5]|max_length[100]',
			array(
				'required'      => 'Anda harus mengisi kolom %s.'
			)
		);

		$this->form_validation->set_rules(
			'Nama',
			'Nama',
			'required|min_length[5]|max_length[100]',
			array(
				'required'      => 'Anda harus mengisi kolom %s.'
			)
		);
		$this->form_validation->set_rules(
			'Tempat Lahir',
			'Tempat Lahir',
			'required',
			array('required' => 'Anda harus mengisi kolom %s.')
		);

		$this->form_validation->set_rules(
			'Tanggal Lahir',
			'Tanggal Lahir',
			'required',
			array('required' => 'Anda harus mengisi kolom %s.')
		);

		$this->form_validation->set_rules(
			'Gender',
			'Gender',
			'required',
			array('required' => 'Anda harus mengisi kolom %s.')
		);

		$this->form_validation->set_rules(
			'Status',
			'Status',
			'required',
			array('required' => 'Anda harus mengisi kolom %s.')
		);

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header', $data);
			$this->load->view('anggota/editdata', $data);
			$this->load->view('templates/footer');
		} else {
			redirect('anggota');
		}
	}

	public function accData()
	{
		$this->MAnggota->updateData();
		redirect('anggota');
	}
}
