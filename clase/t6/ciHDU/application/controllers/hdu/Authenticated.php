<?php
class Authenticated extends CI_Controller{
    public function index() {
        frame($this, 'home/index');
    }
}