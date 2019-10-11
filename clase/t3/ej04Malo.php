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
    echo "<label>Ususario</label>";
    echo "<input type=\"text\" name=\"ncookie\"/></br>";
    echo "<label>Clave</label>";
    echo "<input type=\"password\" name=\"ncontent\"/></br>";
    echo "<input type=\"hidden\" name=\"conexion\"/></br>";
    echo "<input type=\"submit\" value=\"Autenticar\"/>";
    echo "</form>";
} 

if ($_COOKIE["$conectado"]=="desconectado") {
    header('Location:https://ej04-01.php')
    ;
}
?>
</body>
</html>