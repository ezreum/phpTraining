<?php
class Persona extends CI_controller{
    public function r(){
        $this->load->model('persona_model');
        $datos['personas'] = $this->persona_model->getPersonas();
        $this->load->view('persona/recover',$datos);
    }
}

?>