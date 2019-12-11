<?php
class Persona extends CI_controller{
    public function index(){
        $this->load->model('persona_modelo');
        $datos['personas'] = $this->persona_modelo->getPersonas();
        $this->load->view('persona/recover',$datos);
    }
    
    public function create() {
        $this->load->model('pais_modelo');
        $data['paises'] = $this->pais_modelo->getPaises();
        $this->load->model('aficion_modelo');
        $data['aficiones'] = $this->aficion_modelo->getAficiones();
        $this->load->view('persona/create',$data);
    }
    
    public function createPost() {
        $this->load->model('persona_modelo');
        
        $nombre = isset($_POST['nombre'])?$_POST['nombre']:null;
        $paisN = isset($_POST['relacionNace'])?$_POST['relacionNace']:null;
        $paisR = isset($_POST['relacionReside'])?$_POST['relacionReside']:null;
        $aficionG = isset($_POST['gusta'])?$_POST['gusta']:[];
        $aficionO = isset($_POST['odia'])?$_POST['odia']:[];
        try {
            $this->persona_modelo->crearPersona($nombre,$paisN, $paisR, $aficionG, $aficionO);
        } catch (Exception $e) {
            $_SESSION['_msg']['texto']=$e->getMessage();
            $_SESSION['_msg']['uri']='pais/create';
            redirect(base_url().'msg');
        }
        redirect(base_url().'persona');
    }
    
    public function updateGet() {
        $this->load->model('persona_modelo');
        $iden = isset($_POST['personaU'])?$_POST['personaU']:'';
        $dato['persona'] = $this->persona_modelo->getPersona($iden);
        $this->load->model('aficion_modelo');
        $dato['aficiones'] = $this->aficion_modelo->getAficiones($iden);
        $this->load->view('persona/update',$dato);
    }
    
    public function updatePost() {
        $this->load->model('persona_modelo');
        $datos[] = isset($_POST['id'])?$_POST['id']:'';
        $datos[] = isset($_POST['nombre'])?$_POST['nombre']:'';
        $datos[] = isset($_POST['id-old'])?$_POST['id-old']:'';
        $datos[] = isset($_POST['nombre-old'])?$_POST['nombre-old']:'';
        try {
            $this->persona_modelo->update($datos);
        } catch (Exception $e) {
            $_SESSION['_msg']['texto']=$e->getMessage();
            $_SESSION['_msg']['uri']='aficion/create';
            redirect(base_url().'msg');
        }
        redirect(base_url().'aficion');
    }
    
    
}

?>