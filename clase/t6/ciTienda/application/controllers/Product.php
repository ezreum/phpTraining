<?php
class Product extends CI_Controller {
    function index() {
        $this->load->model('product_model');
        $data['products'] = $this->product_model->getProducts();
        frame($this, 'product/recover', $data);
    }
    
    function create() {
        frame($this, 'product/create');
    }
    
    function createPost() {
        $name = isset($_POST['name'])?$_POST['name']:null;
        $price = isset($_POST['price'])?$_POST['price']:null;
        try {
                $this->load->model('product_model');
                $this->product_model->create($name,$price);
                redirect(base_url().'product');
        } catch (Exception $e) {
            session_start();
            $_SESSION['_msg']['texto']=$e->getMessage();
            $_SESSION['_msg']['uri']='product/recover';
        }
    }
}