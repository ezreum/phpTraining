<?php

Class Aficion extends CI_Controller{
    
    public function index() {
        $this->load->model('AficionModel');
        $datos['aficiones'] = $aficiones = $this->AficionModel->getAficiones();
        frame($this, "aficion/recover", $datos);
    }
    
    public function create() {
        frame($this, "aficion/create");
    }
    
    
    public function createPost() {
        try {
            $nombre = isset($_POST['nombre'])?$_POST['nombre']:'';
            $this->load->model('AficionModel');
            $this->AficionModel->create($nombre);
        } catch (Exception $e) {
        }
        redirect(base_url().'aficion');
    }
    
}



?>