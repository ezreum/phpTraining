<?php

class Pais extends CI_controller{
    
    public function index(){
        session_start();
        if ( isset($_SESSION['_user']) && 
            ($_SESSION['_user']->hasPriv->nombre=='authenticated' || $_SESSION['_user']->hasPriv->nombre=='admin' )) {
            $this->load->model('pais_model');
            $datos['paises'] = $this->pais_model->getPaises();
            frame($this, 'pais/recover',$datos);
        }
        else {
            frame($this, 'hdu/privilegios');
        }
        
        
    }
    
    public function create(){
        session_start();
        if ( isset($_SESSION['_user']) && 
            ($_SESSION['_user']->hasPriv->nombre=='authenticated'|| $_SESSION['_user']->hasPriv->nombre=='admin')) {
            frame($this, 'pais/create');
        }
        else {
            frame($this, 'hdu/privilegios');
        }
        
    }
    
    public function createPost(){
        $this->load->model('pais_model');
        $nombre = isset($_POST['nombre'])?$_POST['nombre']:'';
        try {
            $this->pais_model->crearPais($nombre);
        } catch (Exception $e) {
            session_start();
            $_SESSION['_msg']['texto']=$e->getMessage();
            $_SESSION['_msg']['uri']='pais/create';
            redirect(base_url().'msg');
        }
        
        redirect(base_url().'pais');
    }
    
    
    public function updateGet() {
        $this->load->model('pais_model');
        $iden = isset($_POST['pais'])?$_POST['pais']:'';
        $datos ['pais'] = $this->pais_model->getCountry($iden);
        frame($this, 'pais/update',$datos);
    }
    
    public function updatePost() {
        $this->load->model('pais_model');
        $datos[] = isset($_POST['id'])?$_POST['id']:'';
        $datos[] = isset($_POST['nombre'])?$_POST['nombre']:'';
        try {
            $this->pais_model->update($datos); 
        } catch (Exception $e) {
            session_start();
            $_SESSION['_msg']['texto']=$e->getMessage();
            $_SESSION['_msg']['uri']='pais/create';
            redirect(base_url().'msg');
        }
        redirect(base_url().'pais');
    }
    
    
    public function deletePost() {
        $this->load->model('pais_model');
        $iden = isset($_POST['pais'])?$_POST['pais']:'';
        $this->pais_model->deleteCountry($iden);
        redirect(base_url().'pais');
    }
    
}

?>