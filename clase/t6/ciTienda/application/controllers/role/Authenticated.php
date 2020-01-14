<?php
class Authenticated extends CI_Controller{
    public function index() {
        session_start();
        frame($this, 'home/home');
    }
    
    public function signed() {
        session_start();
        if ( isset($_SESSION['_user']) && $_SESSION['_user']->hasPriv->nombre!='guest' ) {
            $this->load->model('user_model');
            $datos['persona'] = $this->user_model->getPerson($_SESSION['_user']->nick);
            frame($this, 'persona/recover', $datos);
        }
        else  frame($this, 'hdu/privilegios');
    }
    
    public function see(){
        session_start();
        if ( isset($_SESSION['_user']) && $_SESSION['_user']->hasPriv->nombre!='guest' ) {
            $this->load->model('user_model');
            $datos['personas'] = $this->user_model->getPersonas();
            frame($this, 'persona/recoverAll', $datos);
        }
        else  frame($this, 'hdu/privilegios');
    }
    
    public function logout(){
        session_start();
        session_unset();
        
        redirect(base_url());
    }
}