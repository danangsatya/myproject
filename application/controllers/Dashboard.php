<?php
class Dashboard extends CI_Controller
{
    public function index(){
 
    $this->load->view('v_header');
    $this->load->view('v_sidebar');
    $this->load->view('v_daftar_files');
    $this->load->view('v_footer');
    }
}