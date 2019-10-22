<?php
session_start();
$name= isset($_POST['name'])?$_POST['name']:'';
$check= isset($_POST['recordar'])?"checked=\"checked\"":'';

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