<?php
session_start();

$html=<<<HTML
<form method="POST">
<label>Nombre</label>
<input type="text" name="nombre"/>
<br/>
<label>Contraseña</label>
<input type="password" name="pwd"/>
<br/>
<input type="submit" value="registrar"/>
<form>
HTML;
echo $html;

$activo=isset($_POST['nombre'])?$_POST['nombre']:'';
$pwd=isset($_POST['pwd'])?$_POST['pwd']:'';

require_once 'utilito.php';
if ($activo=='' && $pwd==''){
echo <<<html
<h2>Introduce las credenciales del nuevo usuario</h2>
html;
}
else{
    echo crearUsuario($activo,$pwd)==false?
    <<<HTML
    <h2>El usuario ya existe, intentalo de nuevo</h2>
HTML
    :header('Location:login.php');
}
var_dump($_SESSION['usuarios']);
?>