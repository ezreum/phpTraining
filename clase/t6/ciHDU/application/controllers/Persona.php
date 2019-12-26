<?php
class Persona extends CI_controller{
    public function index(){
        session_start();
        if ( isset($_SESSION['_user']) && $_SESSION['_user']!='guest' ) {
            $this->load->model('persona_model');
            $datos['persona'] = $this->persona_model->getPerson($_SESSION['_user']);
            frame($this, 'persona/recover', $datos);
        }
        else  frame($this, 'hdu/privilegios');
    }
    
    public function see(){
        session_start();
        if ( isset($_SESSION['_user']) && $_SESSION['_user']!='guest' ) {
            $this->load->model('persona_model');
            $datos['personas'] = $this->persona_model->getPersonas();
            frame($this, 'persona/recoverAll', $datos);
        }
        else  frame($this, 'hdu/privilegios');
    }
    
    public function create() {
        session_start();
        if ( isset($_SESSION['_user']) && $_SESSION['_user']!='guest' ) {
            $this->load->model('pais_model');
            $data['paises'] = $this->pais_model->getPaises();
            $this->load->model('aficion_model');
            $data['aficiones'] = $this->aficion_model->getAficiones();
            frame($this, 'persona/create', $data);
        }
        else  frame($this, 'hdu/privilegios');
    }
    
    public function createPost() {
        $this->load->model('persona_model');
        
        $nombre = isset($_POST['nombre'])?$_POST['nombre']:null;
        $paisN = isset($_POST['relacionNace'])?$_POST['relacionNace']:null;
        $paisR = isset($_POST['relacionReside'])?$_POST['relacionReside']:null;
        $aficionG = isset($_POST['gusta'])?$_POST['gusta']:[];
        $aficionO = isset($_POST['odia'])?$_POST['odia']:[];
        try {
            $this->persona_model->crearPersona($nombre,$paisN, $paisR, $aficionG, $aficionO);
        } catch (Exception $e) {
            session_start();
            $_SESSION['_msg']['texto']=$e->getMessage();
            $_SESSION['_msg']['uri']='persona/create';
            redirect(base_url().'msg');
        }
        redirect(base_url().'persona');
    }
    
    public function updateGet() {
        $this->load->model('persona_model');
        $iden = isset($_POST['personaU'])?$_POST['personaU']:'';
        $dato['persona'] = $this->persona_model->getPersona($iden);
        $this->load->model('aficion_model');
        $dato['aficiones'] = $this->aficion_model->getAficiones();
        $this->load->model('pais_model');
        $dato['paises'] = $this->pais_model->getPaises();
        frame($this, 'persona/update', $dato);
    }
    
    public function updatePost() {
        $this->load->model('persona_model');
        $id = isset($_POST['id'])?$_POST['id']:'';
        $nombre = isset($_POST['nombre'])?$_POST['nombre']:null;
        $paisN = isset($_POST['paisN'])?$_POST['paisN']:null;
        $paisR = isset($_POST['paisR'])?$_POST['paisR']:null;
        $gustos = isset($_POST['gusto'])?$_POST['gusto']:[];
        $odios = isset($_POST['odio'])?$_POST['odio']:[];
        
        try {
            $this->persona_model->update($id, $nombre, $paisN, $paisR, $gustos, $odios);
        } catch (Exception $e) {
            session_start();
            $_SESSION['_msg']['texto']=$e->getMessage();
            $_SESSION['_msg']['uri']='persona/updateGet';
            redirect(base_url().'msg');
        }
        redirect(base_url().'persona');
    }
    
    public function deletePost() {
        $this->load->model('persona_model');
        $id= isset($_POST['personaD'])?$_POST['personaD']:null;
        $this->persona_modelo->delete($id);
        redirect(base_url().'persona');
    }
    
}

?>