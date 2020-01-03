<?php
class Authenticated extends CI_Controller{
    public function index() {
        frame($this, 'home/index');
    }
    
    public function signed() {
        session_start();
        if ( isset($_SESSION['_user']) && $_SESSION['_user']!='guest' ) {
            $this->load->model('persona_model');
            $datos['persona'] = $this->persona_model->getPerson($_SESSION['_user']);
            frame($this, 'persona/recover', $datos);
        }
        else  frame($this, 'hdu/privilegios');
    }
    
    public function logout(){
        session_start();
        session_unset();
        
        redirect(base_url());
    }
}