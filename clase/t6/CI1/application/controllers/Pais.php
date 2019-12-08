<?php
session_start();

class Pais extends CI_controller{
    
    public function index(){
        $this->load->model('pais_modelo');
        $datos['paises'] = $this->pais_modelo->getPaises();
        $this->load->view('pais/recover',$datos);
    }
    
    public function create(){
        $this->load->view('pais/create');
    }
    
    public function createPost(){
        $this->load->model('pais_modelo');
        $nombre = isset($_POST['nombre'])?$_POST['nombre']:'';
        try {
            $this->pais_modelo->crearPais($nombre);
        } catch (Exception $e) {
            $_SESSION['_msg']['texto']=$e->getMessage();
            $_SESSION['_msg']['uri']='pais/create';
            redirect(base_url().'msg');
        }
        
        redirect(base_url().'pais');
    }
    
    
    public function update() {
        $this->load->model('pais_modelo');
        $datos['paises'] = $this->pais_modelo->getPaises();
        $this->load->view('pais/update',$datos);
    }
    
    public function updateGet() {
        $this->load->model('pais_modelo');
        $iden = isset($_POST['pais'])?$_POST['pais']:'';
        $dato['pais'] = $this->pais_modelo->getCountry($iden);
        $this->load->view('pais/updateGet',$dato);
    }
    
    public function updatePost() {
        $this->load->model('pais_modelo');
        $datos[] = isset($_POST['id'])?$_POST['id']:'';
        $datos[] = isset($_POST['nombre'])?$_POST['nombre']:'';
        $datos[] = isset($_POST['id-old'])?$_POST['id-old']:'';
        $datos[] = isset($_POST['nombre-old'])?$_POST['nombre-old']:'';
        try {
            $this->pais_modelo->update($datos); 
        } catch (Exception $e) {
            $_SESSION['_msg']['texto']=$e->getMessage();
            $_SESSION['_msg']['uri']='pais/create';
            redirect(base_url().'msg');
        }
        redirect(base_url().'pais');
    }
    
    public function delete() {
        ;
    }
    
    public function deletePost() {
        ;
    }
    
}

?>