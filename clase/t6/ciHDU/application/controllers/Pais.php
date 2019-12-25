<?php
session_start();

class Pais extends CI_controller{
    
    public function index(){
        $this->load->model('pais_modelo');
        $datos['paises'] = $this->pais_modelo->getPaises();
        frame($this, 'pais/recover',$datos);
    }
    
    public function create(){
        frame($this, 'pais/create');
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
    
    
    public function updateGet() {
        $this->load->model('pais_modelo');
        $iden = isset($_POST['paisU'])?$_POST['paisU']:'';
        $dato['pais'] = $this->pais_modelo->getCountry($iden);
        frame($this, 'pais/update',$datos);
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
    
    
    public function deletePost() {
        $this->load->model('pais_modelo');
        $iden = isset($_POST['paisD'])?$_POST['paisD']:'';
        $this->pais_modelo->deleteCountry($iden);
        redirect(base_url().'pais');
    }
    
}

?>