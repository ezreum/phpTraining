<?php
class Aficion extends CI_controller{
    public function index(){
        session_start();
        if ( isset($_SESSION['_user']) &&
            ($_SESSION['_user']->hasPriv->nombre=='authenticated' || $_SESSION['_user']->hasPriv->nombre=='admin' )) {
            $this->load->model('aficion_model');
            $datos['aficiones'] = $this->aficion_model->getAficiones();
            frame($this, 'aficion/recover',$datos);
        }
        else {
            frame($this, 'hdu/privilegios');
        }
        
        
    }
    
    public function create(){
        session_start();
        if ( isset($_SESSION['_user']) &&
            ($_SESSION['_user']->hasPriv->nombre=='authenticated' || $_SESSION['_user']->hasPriv->nombre=='admin' )) {
             frame($this, 'aficion/create');
                }
        else {
            frame($this, 'hdu/privilegios');
        }
       
    }
    
    public function createPost(){
        $this->load->model('aficion_model');
        $nombre = isset($_POST['nombre'])?$_POST['nombre']:'';
        try {
            $this->aficion_model->create($nombre);
        } catch (Exception $e) {
            session_start();
            $_SESSION['_msg']['texto']=$e->getMessage();
            $_SESSION['_msg']['uri']='aficion/create';
            redirect(base_url().'msg');
        }
        
        redirect(base_url().'aficion');
    }
    
    
    public function updateGet() {
        $this->load->model('aficion_model');
        $iden = isset($_POST['aficion'])?$_POST['aficion']:'';
        $dato['aficion'] = $this->aficion_model->getAficion($iden);
        $this->load->view('aficion/update',$dato);
    }
    
    public function updatePost() {
        $this->load->model('aficion_model');
        $datos[] = isset($_POST['id'])?$_POST['id']:'';
        $datos[] = isset($_POST['nombre'])?$_POST['nombre']:'';
        try {
            $this->aficion_model->update($datos);
        } catch (Exception $e) {
            $_SESSION['_msg']['texto']=$e->getMessage();
            $_SESSION['_msg']['uri']='aficion/create';
            redirect(base_url().'msg');
        }
        redirect(base_url().'aficion');
    }
    
    public function delete() {
        $this->load->model('aficion_model');
        $iden = isset($_POST['aficion'])?$_POST['aficion']:'';
        $this->aficion_model->deleteAficion($iden);
        redirect(base_url().'aficion');
    }
    
}

?>