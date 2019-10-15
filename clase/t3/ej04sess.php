<html>
<head>
<title>Ejercicio de tratatmiento de sesiones</title>
</head>
<body>
<h1>Tratamiento de sesiones</h1>
<br/>
<?php
$html = <<<HTML
<p>Primera ejecución. Usted no está conectado</p>
<form action=ej04-01sess.php method="POST">
<label>Ususario</label>
<input type="text" name="ncookie"/><br/>
<label>Clave</label>
<input type="password" name="ncontent"/><br/>
<input type="submit" value="Autenticar">
</form>
HTML;
echo $html;
?>