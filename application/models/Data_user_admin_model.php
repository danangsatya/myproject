<?php 
class Data_user_admin_model extends CI_Model{  
  function get_admin(){ 
      $result = $this->db->get('admin'); 
      return $result; 
    } 

    function get_id_admin($id_admin){
			$query = $this->db->get_where('admin', array('id_admin' => $id_admin));
			return $query;
		}

   function save($username,$password){ 
    $data = array( 
      'username' => $username, 
      'password' => md5($password)
    ); 
    $this->db->insert('admin',$data); 
  }

  function delete($id_admin){
    $this->db->where('id_admin', $id_admin);
    $this->db->delete('admin');
  }
  
  function update($product_id,$product_name,$product_price){
  $data = array(
  'product_name' => $product_name,
  'product_price' => $product_price
  );
  $this->db->where('product_id', $product_id);
  $this->db->update('product', $data);
  }



} 