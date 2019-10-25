<?php
session_start();
$usuario = isset($_GET['name'])?$_GET['name']:'';

foreach ($_SESSION['usuarios'][$_SESSION['_activo']]['mensajes'][$usuario] as $mensaje){
    foreach ($mensaje as $r => $mensajito){
        $numMen=($r+1);
        echo "<p>numero de mensaje ($numMen). De {$mensajito['remitente']} a las {$mensajito['fecha']}</p>";
        echo "<p>{$mensajito['texto']}</p>";
        }
    }
?>