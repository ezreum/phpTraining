<?php
session_start();
$activo = isset($_SESSION['_activo'])?$_SESSION['_activo']:"";
echo $activo;
echo <<<html
<hr/>
html;
require_once 'utilito.php';
pintarUsuarios();
echo <<<HTML
    <br/>
    <a href="login.php">Entrar con otro usuario</a>
HTML;

?>