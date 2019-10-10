<html>
<head>
<title>Ejercicio de tratatmiento de cookies</title>
</head>
<body>
<h1>Tratamiento de cookies</h1>
</br>
<?php 
if (!isset($_COOKIE['nv'])) {
    echo "<p>Primera ejecución. Usted no está conectado</p>";
    echo "<form action=\"ej04-01.php\">";
    echo "<input type=\"text\" name=\"\"/></br>";
    echo "<input type=\"password\" name=\"\"/></br>";
    echo "<input type=\"submit\" value=\"Autenticar\"/>";
    echo "</form>";
}
else {
    //modificado
    echo "<p>Conectado como {$_COOKIE['nv']}</p>";
    echo "<form action=\"ej04-01.php\">";
    echo "<input type=\"text\" name=\"\"/></br>";
    echo "<input type=\"password\" name=\"\"/></br>";
    echo "<input type=\"submit\" value=\"Autenticar\"/>";
    echo "</form>";
}
?>
</body>
</html>