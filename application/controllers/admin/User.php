<?php

class User extends CI_Controller
{
	function __construct(){ 
        parent::__construct(); 
        $this->load->model('Data_user_admin_model'); 
    } 

	function index()
	{
		$data['admin'] = $this->Data_user_admin_model->get_admin();
		$this->load->view('admin/user.php',$data);
		
	}

	function add_new(){ 
		$this->load->view('admin/add_user.php'); 
	  } 

	function save(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$this->Data_user_admin_model->save($username,$password);
        redirect(base_url("admin/user"));
	}

	function delete(){
		$id_admin = $this->uri->segment(4);
		$this->Data_user_admin_model->delete($id_admin);
		redirect(base_url("admin/user"));
	}

	function get_edit(){
		$id_admin = $this->uri->segment(4);
		$result = $this->Data_user_admin_model->get_id_admin($id_admin);
		if($result->num_rows() > 0){
		$i = $result->row_array();
		$data = array(
		'id_admin' => $i['id_admin'],
		'username' => $i['username'],
		'password' => $i['password']
		);
			$this->load->view('admin/edit_user',$data);
		}else{
			echo "Data Was Not Found";
		}
	}

}