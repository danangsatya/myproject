<?php

class User extends CI_Controller
{
	public function index()
	{
		$this->load->view('admin/user.php');
	}
}