<?php
session_start();
$usuario = isset($_GET['name'])?$_GET['name']:'';
    $numMen=1;
foreach ($_SESSION['usuarios'][$_SESSION['_activo']]['mensajes'][$usuario] as $mensaje){
    foreach ($mensaje as $r => $mensajito){
        echo "<p>Numero de mensaje: $numMen. &emsp; Remitente: {$mensajito['remitente']}. &emsp; Fecha: {$mensajito['fecha']}</p>
        <p>Mensaje: {$mensajito['texto']}</p>";
        $numMen++;
        }
        echo "<hr/>";
    }
echo <<<listaUsuario
    <a href="listaUsuarios.php">Bandeja de entrada</a>
listaUsuario;
?>