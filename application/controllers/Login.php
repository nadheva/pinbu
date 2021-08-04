<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

	public function index()
	{

		// Fungsi Login
		$data['judul'] = 'Login';
		$valid = $this->form_validation;
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$valid->set_rules('username', 'username', 'required');
		$valid->set_rules('password', 'password', 'required');

		if ($valid->run()) {
			$this->simple_login->login($username, $password, base_url('home'), base_url('login'));
		}
		// End fungsi login
		$this->load->view('akun/login', $data);
	}

	public function logout()
	{
		$this->simple_login->logout();
	}
}
