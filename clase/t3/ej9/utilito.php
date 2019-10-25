<?php
session_start();

function comprobarUsuario($usuar, $contra)
{
    $bo = false;

    $bo = (array_key_exists($usuar, $_SESSION['usuarios'])) && (in_array($contra, $_SESSION['usuarios'][$usuar])) ? true : false;

    return $bo;
}

function crearUsuario($usu, $contra)
{
    $bol = false;
    if (($usu != '') && ($contra != '')) {
        if (! isset($_SESSION['usuarios'][$usu])) {
            $_SESSION['usuarios'][$usu] = [
                'pwd' => $contra,
                'mensajes' => []
            ];
            $bol = true;
        }
    }
    return $bol;
}

function pintarUsuarios()
{
    foreach ($_SESSION['usuarios'] as $user => $content) {
        if ($user != $_SESSION['_activo']) {
            $numMen = sizeof($_SESSION['usuarios'][$_SESSION['_activo']]['mensajes'][$user]);
            $html = "";
            if ($_SESSION['usuarios'][$_SESSION['_activo']]['mensajes'][$user]>0) {
                $html = <<<HTML
                <a href="leer.php?name=$user">leer</a>
                <a href="escribir.php?name=$user">escribir</a>                
HTML;
            echo $user . " ($numMen) " . $html . "<br/>";
            }
            else{
                $html = <<<HTML
                <a href="escribir.php?name=$user">escribir</a>
HTML;
                echo $user . $html . "<br/>";
            }
        }
    }
}
?>