<?php
class Persona extends CI_controller{
    public function index(){
        $this->load->model('persona_modelo');
        $datos['personas'] = $this->persona_modelo->getPersonas();
        frame($this, 'persona/recover', $datos);
    }
    
    public function create() {
        $this->load->model('pais_modelo');
        $data['paises'] = $this->pais_modelo->getPaises();
        $this->load->model('aficion_modelo');
        $data['aficiones'] = $this->aficion_modelo->getAficiones();
        frame($this, 'persona/create', $data);
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
            session_start();
            $_SESSION['_msg']['texto']=$e->getMessage();
            $_SESSION['_msg']['uri']='persona/create';
            redirect(base_url().'msg');
        }
        redirect(base_url().'persona');
    }
    
    public function updateGet() {
        $this->load->model('persona_modelo');
        $iden = isset($_POST['personaU'])?$_POST['personaU']:'';
        $dato['persona'] = $this->persona_modelo->getPersona($iden);
        $this->load->model('aficion_modelo');
        $dato['aficiones'] = $this->aficion_modelo->getAficiones();
        $this->load->model('pais_modelo');
        $dato['paises'] = $this->pais_modelo->getPaises();
        frame($this, 'persona/update', $dato);
    }
    
    public function updatePost() {
        $this->load->model('persona_modelo');
        $id = isset($_POST['id'])?$_POST['id']:'';
        $nombre = isset($_POST['nombre'])?$_POST['nombre']:null;
        $paisN = isset($_POST['paisN'])?$_POST['paisN']:null;
        $paisR = isset($_POST['paisR'])?$_POST['paisR']:null;
        $gustos = isset($_POST['gusto'])?$_POST['gusto']:[];
        $odios = isset($_POST['odio'])?$_POST['odio']:[];
        
        try {
            $this->persona_modelo->update($id, $nombre, $paisN, $paisR, $gustos, $odios);
        } catch (Exception $e) {
            session_start();
            $_SESSION['_msg']['texto']=$e->getMessage();
            $_SESSION['_msg']['uri']='persona/updateGet';
            redirect(base_url().'msg');
        }
        redirect(base_url().'persona');
    }
    
    public function deletePost() {
        $this->load->model('persona_modelo');
        $id= isset($_POST['personaD'])?$_POST['personaD']:null;
        $this->persona_modelo->delete($id);
        redirect(base_url().'persona');
    }
    
}

?>