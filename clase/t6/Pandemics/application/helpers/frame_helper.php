<?php
function frame($controller, $view, $data=[]) {
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    $controller->load->view('_templates/head',$data);
    $controller->load->view('_templates/header',$data);
    $controller->load->view('_templates/nav',$data);
    $controller->load->view($view,$data);
    $controller->load->view('_templates/footer',$data);
    $controller->load->view('_templates/end',$data);
}