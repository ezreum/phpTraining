<?php
session_start();
$check;
$activo;
if ($_SESSION['_recordar']!='') {
    $check = $_SESSION['_recordar'];
    $activo = $_SESSION['_activo'];
}
echo $check." ".$activo;
$html = <<<HTML
<html>
<head>
<title>Login</title>
</head>
<body>

<form action="loginPost.php" method="POST">
<fieldset>
<legend>Login</legend>
<label for="name">nombre</label>
<input id="name" type="text" name="name" value="$activo" />
<br/>
<label for="pwd">contraseña</label>
<input id="pwd" type="password" name="pwd" value=""/>
<br/>
<label for="recordar">recordar</label>
<input id="recordar" type="checkbox" name="recordar" value="recordar" $check/>
<input type="submit" value="logear"/>
</fieldset>
</form>

<a href="registro.php">Registrar nuevo usuario</a>
<hr/>
</body>
</html>
HTML;
echo $html;
echo '<pre>';
var_dump($_SESSION['usuarios']);
echo '</pre>';
?>