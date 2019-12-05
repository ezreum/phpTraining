<?php
session_start();

class Pais extends CI_controller{
    
    public function c(){
        $this->load->view('pais/create');
    }
    
    public function cPost(){
        $this->load->model('pais_modelo');
        $nombre = isset($_POST['nombre'])?$_POST['nombre']:'';
        try {
            $this->pais_modelo->crearPais($nombre);
        } catch (Exception $e) {
            $_SESSION['_msg']['texto']=$e->getMessage();
            $_SESSION['_msg']['uri']='pais/create';
            redirect(base_url().'msg');
        }
        
        redirect(base_url().'pais/r');
    }
    
    public function r(){
        $this->load->model('pais_modelo');
        $datos['paises'] = $this->pais_modelo->getPaises();
        $this->load->view('pais/recover',$datos);
    }
}

?>