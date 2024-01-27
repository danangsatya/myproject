<?php 
class User extends CI_Controller{ 
  function __construct(){ 
    parent::__construct(); 
    $this->load->model('user_model'); 
  } 
  function index(){ 
    $data['admin'] = $this->user_model->get_admin(); 
    $this->load->view('user',$data);
  } 
  function add_new(){ 
    $this->load->view('add_product_view'); 
  } 
  function save(){ 
    $product_name = $this->input->post('product_name'); 
    $product_price = $this->input->post('product_price'); 
    $this->product_model->save($product_name,$product_price); 
    redirect('product'); 
  } 
} 