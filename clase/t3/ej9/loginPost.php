<?php
session_start();
$activo = isset($_POST['name']) ? $_POST['name'] : '';
$pwd = isset($_POST['pwd']) ? $_POST['pwd'] : '';
$check = isset($_POST['recordar']) ? true : false;

$activo != '' ? $_SESSION['_activo'] = $activo : $_SESSION['_activo'] = '';
$check == true ? $_SESSION['_recordar'] = "checked=\"checked\"" : $_SESSION[_recordar] = '';

if (($activo!='')&&($pwd!='')) {
    require_once 'utilito.php';
    if (comprobarUsuario($activo, $pwd)>0){
        header('Location:listaUsuarios.php');
    }
    else {
        header('Location:errorLogin.php');
    }
}
else {
    header('Location:errorLogin.php');
}
?>