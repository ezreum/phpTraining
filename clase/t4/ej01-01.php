<?php
$name = isset($_GET['nombre'])?$_GET['nombre']:'No introdujiste nombre';
$numero=rand(1,3);
echo "<h$numero>¡Hola $name!</h$numero>";
?>