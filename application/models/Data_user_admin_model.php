<?php 
class Data_user_admin_model extends CI_Model{  
  function get_admin(){ 
    $result = $this->db->get('admin'); 
    return $result; 
    } 
  
    public function index(){
    $data['admin'] = $this->Data_user_admin_model->get_admin();
    $this->load->view('admin/user.php',$data);
  }
} 