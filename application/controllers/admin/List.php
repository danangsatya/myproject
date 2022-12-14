<?php

class List extends CI_Controller
{
	public function index()
	{
		$this->load->view('admin/list.php');
	}
}