<?php
$name = isset($_GET['nombre'])?$_GET['nombre']:'No introdujiste nombre';
$apellido = isset($_GET['apellido'])?$_GET['apellido']:'No introdujiste nombre';
$pais = isset($_GET['pais'])?$_GET['pais']:'nada';
$numero=rand(1,3);
echo "<h$numero>¡Hola $name $apellido!</h$numero>";
if ($pais != 'nada'){
    echo "<h$numero>y eres de $pais</$numero>";
}
?>