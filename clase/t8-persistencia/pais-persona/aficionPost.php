<?php
require_once '../rb.php';
require_once '../util.php';
$nombre=isset($_POST['nombre'])?$_POST['nombre']:'';

prepRB();

$aficion = R::dispense('aficion');
$aficion -> nombre = $nombre;

R::store($aficion)||die();
header('Location:aficion.php');
?>