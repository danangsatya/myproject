<?php

class User extends CI_Controller
{
	function __construct(){ 
        parent::__construct(); 
        $this->load->model('Data_user_admin_model'); 
    } 

	public function index()
	{
		$data['admin'] = $this->Data_user_admin_model->get_admin();
		$this->load->view('admin/user.php',$data);
		
	}
}