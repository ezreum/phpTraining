<?php
require_once '../util.php';
$campo = isset($_GET['campo'])?$_GET['campo']:'';
$tabla = isset($_GET['tabla'])?$_GET['tabla']:'';

$bd=conectarDB();

$sql = <<<sql
select $campo from $tabla;
sql;


$filas = $bd->query($sql);


echo "<table border='1'><th>nombre</th>";
foreach ($filas as $nombre){
    echo "<tr><td>{$nombre['nombre']}</td></tr>";
    }
echo "</tabla>";
?>