<?php
session_start();
require_once '../util.php';
$nombre = isset($_POST['nom'])?$_POST['nom']:null;
$apellido = isset($_POST['ape'])?$_POST['ape']:null;
$telf = isset($_POST['telf'])?$_POST['telf']:null;
$sexo = isset($_POST['sexo'])?$_POST['sexo']:null;

$base=conectarDB();

$sql="INSERT INTO empleados(nombre, apellido, telefono, sexo) values(?,?,?,?);";


$sentencia  = $base->prepare($sql);
    if ($sentencia->execute([$nombre,$apellido,$telf,$sexo])){
    $_SESSION['inserciones'][]="$nombre,$apellido,$telf,$sexo";
    header('Location:crearUsuInfo.php');
    }
    else{
        header('Location:error.php');;
    }


?>