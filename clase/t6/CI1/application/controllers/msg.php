<?php
class Msg extends CI_Controller{
    public function index() {
        session_start();
        $data['texto']= $_SESSION['_msg']['texto'];
        $data['uri']= $_SESSION['_msg']['uri'];
        
        $this->load->view('_templates/message',$data);
    }
}