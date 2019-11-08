<?php
require_once '../util.php';
$db = conectarDB();

$info = [ ['cocacola', 1.2], ['mejillones', 3.23], ['abrelatas', 4.34] ];
$sql="INSERT INTO producto (nombre,precio) values(?,?);";

$sentencia  = $db->prepare($sql);
foreach ($info as $producto){
    $nombre = $producto[0];
    $precio=$producto[1];
    
    if ($sentencia->execute([$nombre,$precio])){
}

}
echo"Datos insertados";
?>