<?php
class X extends CI_Controller {
    public function index(){
        $this->load->model('x_model');
        $this->x_model->prueba();
    }
}
?>