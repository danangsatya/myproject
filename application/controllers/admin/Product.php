<?php

class Product extends  CI_Controller{
    function __construct(){ 
        parent::__construct(); 
        $this->load->model('product_model'); 
    } 
	public function index(){
        $data['product'] = $this->product_model->get_product();
		$this->load->view('admin/product.php',$data);
	}
}