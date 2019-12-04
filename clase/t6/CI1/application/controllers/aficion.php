<?php
class Aficion extends CI_controller{
    public function r(){
        $this->load->model('aficion_modelo');
        $datos['aficiones'] = $this->aficion_modelo->getAficiones();
        $this->load->view('aficion/recover',$datos);
    }
}

?>