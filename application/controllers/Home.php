<?php

class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('MHome');
		$this->simple_login->cek_login();
	}
	public function index()
	{
		$data['judul'] = 'Dashboard';
		$data["Gender"] = $this->MHome->getDataGender();
		$data["Status"] = $this->MHome->getDataStatus();
		$data["Status1"] = $this->MHome->getDataDbStatus();
		$data["Genre"] = $this->MHome->getDataGenre();
		$data["Genre1"] = $this->MHome->getDataDbGenre();
		$data["WN"] = $this->MHome->getDataWN();
		$data['transaksi'] = $this->MHome->show_transaksi();
		$this->load->view('templates/header', $data);
		$this->load->view('home/index', $data);
		$this->load->view('templates/footer', $data);
	}
}
