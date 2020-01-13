<?php
class Msg extends CI_Controller {
    function index() {
        session_start();
        $data['texto']= $_SESSION['_msg']['texto'];
        $data['uri']= $_SESSION['_msg']['uri'];
        frame($this, 'msg', $data);
    }
}