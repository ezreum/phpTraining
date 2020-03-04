<?php

Class Pais extends CI_Controller{
    
    
    public function index() {
        $this->load->model('PaisModel');
        $datos['paises'] = $this->PaisModel->getPaises();
        frame($this, "pais/recover", $datos);
    }
    
    public function create() {
        frame($this, 'pais/create');
    }
    
    
    public function createPost() {
        $nombre = isset($_POST['nombre'])?$_POST['nombre']:'';
        
        try {
            $this->load->model('PaisModel');
            $this->PaisModel->crearPais($nombre);
        } catch (Exception $e) {
            redirect(base_url().'error/');
        }
        redirect(base_url().'pais');
    }
    
}



?>