<?php
session_start();
$activo = isset($_SESSION['_activo'])?$_SESSION['_activo']:"";
echo $activo;
echo <<<html
<hr/>
html;
require_once 'utilito.php';
pintarUsuarios();

echo "<pre>";
var_dump($_SESSION);
echo "</pre>";
?>