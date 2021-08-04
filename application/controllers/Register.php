<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->library(array('form_validation'));
		$this->load->helper(array('url', 'form'));
		$this->load->model('MAccount'); //call model
	}

	public function index()
	{
		$data['judul'] = 'Register';
		$this->form_validation->set_rules('nama', 'nama', 'required');
		$this->form_validation->set_rules('email', 'email', 'required|valid_email');
		$this->form_validation->set_rules('username', 'username', 'required');
		$this->form_validation->set_rules('password', 'password', 'required');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('akun/register', $data);
		} else {

			$data1['nama']   =    $this->input->post('nama');
			$data1['email']  =    $this->input->post('email');
			$data1['username'] =    $this->input->post('username');
			$data1['password'] =    md5($this->input->post('password'));

			$this->MAccount->daftar($data1);
			$this->load->view('akun/login');
		}
	}
}
