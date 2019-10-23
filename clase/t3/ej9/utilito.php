<?php
session_start();
function comprobarUsuario($usuar,$contra) {
    $bo=false;

    $bo = (array_key_exists($usuar, $_SESSION['usuarios']))&&(in_array($contra, $_SESSION['usuarios'][$usuar]))?true:false;
    
    return $bo;
}

?>