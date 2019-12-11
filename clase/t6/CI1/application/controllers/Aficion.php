<?php
class Aficion extends CI_controller{
    public function index(){
        $this->load->model('aficion_modelo');
        $datos['aficiones'] = $this->aficion_modelo->getAficiones();
        $this->load->view('aficion/recover',$datos);
    }
    
    public function create(){
        $this->load->view('aficion/create');
    }
    
    public function createPost(){
        $this->load->model('aficion_modelo');
        $nombre = isset($_POST['nombre'])?$_POST['nombre']:'';
        try {
            $this->pais_modelo->crearAficion($nombre);
        } catch (Exception $e) {
            $_SESSION['_msg']['texto']=$e->getMessage();
            $_SESSION['_msg']['uri']='aficion/create';
            redirect(base_url().'msg');
        }
        
        redirect(base_url().'aficion');
    }
    
    
    public function updateGet() {
        $this->load->model('aficion_modelo');
        $iden = isset($_POST['aficion'])?$_POST['aficion']:'';
        $dato['aficion'] = $this->aficion_modelo->getAficion($iden);
        $this->load->view('aficion/update',$dato);
    }
    
    public function updatePost() {
        $this->load->model('aficion_modelo');
        $datos[] = isset($_POST['id'])?$_POST['id']:'';
        $datos[] = isset($_POST['nombre'])?$_POST['nombre']:'';
        $datos[] = isset($_POST['id-old'])?$_POST['id-old']:'';
        $datos[] = isset($_POST['nombre-old'])?$_POST['nombre-old']:'';
        try {
            $this->aficion_modelo->update($datos);
        } catch (Exception $e) {
            $_SESSION['_msg']['texto']=$e->getMessage();
            $_SESSION['_msg']['uri']='aficion/create';
            redirect(base_url().'msg');
        }
        redirect(base_url().'aficion');
    }
    
    public function delete(){
        $this->load->model('aficion_modelo');
        $datos['aficiones'] = $this->aficion_modelo->getAficiones();
        $this->load->view('aficion/delete',$datos);
    }
    
    public function deletePost() {
        $this->load->model('aficion_modelo');
        $iden = isset($_POST['aficionD'])?$_POST['aficionD']:'';
        $this->aficion_modelo->deleteAficion($iden);
        redirect(base_url().'aficion');
    }
    
}

?>