<?php 
class Login extends CI_Controller{ 
  function __construct(){ 
    parent::__construct(); 
    $this->load->model('Login_model'); 
  } 
function index(){ 
     $this->load->view('login_view'); 
  } 
}