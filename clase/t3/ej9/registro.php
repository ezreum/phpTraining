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

$name=isset($_POST['nombre'])?$_POST['nombre']:'';
$pwd=isset($_POST['pwd'])?$_POST['pwd']:'';

if (($name!='')&&($pwd!='')) {
    $_SESSION['usuarios']=
        [$name =>[[],$pwd]]
    ;
    echo $_SESSION['usuarios']['pepe'][1];
}

?>