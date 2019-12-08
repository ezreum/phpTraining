<?php
class Persona extends CI_controller{
    public function index(){
        $this->load->model('persona_modelo');
        $datos['personas'] = $this->persona_modelo->getPersonas();
        $this->load->view('persona/recover',$datos);
    }
    
    public function create() {
        echo "hola";
    }
}

?>