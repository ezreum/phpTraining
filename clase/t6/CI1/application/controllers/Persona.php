<?php
class Persona extends CI_controller{
    public function r(){
        $this->load->model('persona_modelo');
        $datos['personas'] = $this->persona_modelo->getPersonas();
        $this->load->view('persona/recover',$datos);
    }
}

?>