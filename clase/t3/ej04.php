<html>
<head>
<title>Ejercicio de tratatmiento de cookies</title>
</head>
<body>
<h1>Tratamiento de cookies</h1>
<br/>
<?php
$html = <<<HTML
<p>Primera ejecución. Usted no está conectado</p>
<form action=ej04-01.php>
<label>Ususario</label>
<input type="text" name="ncookie"/><br/>
<label>Clave</label>"
<input type="password" name="ncontent"/><br/>
<input type="hidden" name="conexion"/><br/>
<input type="submit" value="Autenticar">
</form>
HTML;
if (isset($_COOKIE['mm'])){
$html;
}
?>