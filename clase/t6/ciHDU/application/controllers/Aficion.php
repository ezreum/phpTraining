<?php
class Aficion extends CI_controller{
    public function index(){
        
        if ( isset($_SESSION['_user']) && $_SESSION['_user']>1) {
            $this->load->model('aficion_model');
            $datos['aficiones'] = $this->aficion_model->getAficiones();
            frame($this, 'aficion/recover',$datos);
        }
        else {
            frame($this, 'hdu/privilegios');
        }
        
        
    }
    
    public function create(){
        
        if ( isset($_SESSION['_user']) && $_SESSION['_user']>1) {
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
        $iden = isset($_POST['aficionU'])?$_POST['aficionU']:'';
        $dato['aficion'] = $this->aficion_model->getAficion($iden);
        $this->load->view('aficion/update',$dato);
    }
    
    public function updatePost() {
        $this->load->model('aficion_model');
        $datos[] = isset($_POST['id'])?$_POST['id']:'';
        $datos[] = isset($_POST['nombre'])?$_POST['nombre']:'';
        $datos[] = isset($_POST['nombre-old'])?$_POST['nombre-old']:'';
        try {
            $this->aficion_model->update($datos);
        } catch (Exception $e) {
            $_SESSION['_msg']['texto']=$e->getMessage();
            $_SESSION['_msg']['uri']='aficion/create';
            redirect(base_url().'msg');
        }
        redirect(base_url().'aficion');
    }
    
    public function delete(){
        $this->load->model('aficion_model');
        $datos['aficiones'] = $this->aficion_model->getAficiones();
        $this->load->view('aficion/delete',$datos);
    }
    
    public function deletePost() {
        $this->load->model('aficion_model');
        $iden = isset($_POST['aficionD'])?$_POST['aficionD']:'';
        $this->aficion_model->deleteAficion($iden);
        redirect(base_url().'aficion');
    }
    
}

?>