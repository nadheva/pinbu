<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MAccount extends CI_Model
{

	function daftar($data)
	{
		$this->db->insert('account', $data);
	}
}
