<?php
session_start();
print_r($_SESSION);
$name= isset($_SESSION['name'])?$_SESSION['name']:'';
$check = isset($_SESSION['recordar'])?$_SESSION['recordar']:'';
$html=<<<HTML
<html>
<head>
<title>Login</title>
</head>
<body>

<form action="loginPost.php" method="POST">
<fieldset>
<legend>Login</legend>
<label for="name">nombre</label>
<input id="name" type="text" name="name" value="$name" />
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
</body>
</html>
HTML;
echo $html;
?>