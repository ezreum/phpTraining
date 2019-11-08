<?php
require_once '../util.php';
session_start();
$db = conectarDB();

$nombre = isset($_POST['nombre'])?$_POST['nombre']:null;
$precio=isset($_POST['precio'])?$_POST['precio']:null;

$sql="INSERT INTO producto (nombre,precio) values(?,?);";

$sentencia  = $db->prepare($sql);

    
    if ($sentencia->execute([$nombre,$precio])){
        $sql2="INSERT INTO producto (nombre,precio) values($nombre,$precio);";
        $_SESSION['inserciones'][]=$sql2;
        echo "Datos insertados";
    }


?>
<br/>
<a href="arrayInsertGet.php">volver atrás</a>