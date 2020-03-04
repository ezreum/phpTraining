<?php

Class Trabajador extends CI_Controller{
    
    public function index() {
        $this->load->model('TrabajadorModel');
        $datos['trabajadores'] = $this->TrabajadorModel->getTrabajadores();
        frame($this, 'trabajador/recover', $datos);
    }
    
    
    public function create() {
        $this->load->model('PaisModel');
        $datos['paises'] = $this->PaisModel->getPaises();
        $this->load->model('AficionModel');
        $datos['aficiones'] = $this->AficionModel->getAficiones();
        frame($this, 'trabajador/create', $datos);
    }
    
    public function createPost() {
        $nombre = isset($_POST['nombre'])?$_POST['nombre']:null;
        $paisN = isset($_POST['nace'])?$_POST['nace']:null;
        $aficionG = isset($_POST['aficiones'])?$_POST['aficiones']:[];
        try {
            $this->load->model('TrabajadorModel');
            $this->TrabajadorModel->create($nombre, $paisN, $aficionG);
        } catch (Exception $e) {
            redirect(base_url().'error');
        }
        redirect(base_url().'trabajador');
    }
    
    
    public function jefe() {
        $this->load->model('TrabajadorModel');
        $datos['jefes'] = $this->TrabajadorModel->getTrabajadores();
        $datos['currito'] = isset($_POST['currito'])?$_POST['currito']:'';
        frame($this, "trabajador/jefe", $datos);
    }
    
    public function jefePost() {
        $trabajador = isset($_POST['currito'])?$_POST['currito']:'';
        $jefe = isset($_POST['jefe'])?$_POST['jefe']:'';
        $this->load->model('TrabajadorModel');
        $this->TrabajadorModel->jefe($trabajador,$jefe);
        redirect(base_url().'trabajador');
    }
    
    
}



?>