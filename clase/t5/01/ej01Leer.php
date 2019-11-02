<?php
$name = isset($_GET['nombre'])?$_GET['nombre']:'';
require_once '../util.php';
$base = conectarMySQL();
$query = "insert into trabajadores(nombre) values('$name')";

if($base->exec($query)!=0){
    echo "<h1>Fila insertada</h1>";
}
else {
    echo "<h1>Error inexperado!</h1>";
    die();
}

?>
<a href="ej01.php">volver atrás</a>