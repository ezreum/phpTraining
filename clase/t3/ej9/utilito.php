<?php
session_start();
function comprobarUsuario($usuar,$contra) {
    $bo=false;

    $bo = (array_key_exists($usuar, $_SESSION['usuarios']))&&(in_array($contra, $_SESSION['usuarios'][$usuar]))?true:false;
    
    return $bo;
}

function crearUsuario($usu,$contra) {
    $bol=false;
if (($usu!='')&&($contra!='')) {
    if (!isset($_SESSION['usuario'][$usu])){
        $_SESSION['usuarios'][$usu]=
        ['pwd' => $contra,
         'mensajes' => []
        ]
        ;
        $bol=true;
    }
}
return $bol;
}

function pintarUsuarios() {
    foreach ($_SESSION['usuarios'] as $user => $content){
        if ($user!=$_SESSION['_activo']) {
            $numMen = sizeof($content['mensajes']);
            $html="";
            if ($numMen>0){
                $html=<<<HTML
                <a href="leer.php">leer</a>
HTML;
            }
                $html.=<<<HTML
                <a href="escribir.php">escribir</a>                
HTML;
            echo $user."($numMen)".$html."<br/>";
        }
    }
}
?>