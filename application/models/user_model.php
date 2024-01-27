<?php 
class user_model extends CI_Model{  
  function get_admin(){ 
    $result = $this->db->get('admin'); 
    return $result; 
  } 
} 