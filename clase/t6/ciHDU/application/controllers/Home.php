<?php
class Home extends CI_Controller{
    
    public function index() {
        $_SESSION['_user'] = isset($_SESSION['_user'])?$_SESSION['_user']:'guest';
        frame($this, 'home/index');
    }
    
}
?>