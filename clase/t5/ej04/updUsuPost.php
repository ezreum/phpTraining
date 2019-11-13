<?php
require_once '../util.php';
session_start();
$id = isset($_POST['id'])?$_POST['id']:null;
$nombre = isset($_POST['nom'])?$_POST['nom']:null;
$apellido = isset($_POST['ape'])?$_POST['ape']:null;
$telf = isset($_POST['telf'])?$_POST['telf']:null;
$sexo = isset($_POST['sexo'])?$_POST['sexo']:null;

$base=conectarDB();

$iden = "id = $id";
$nom;
$ape;
$tel;
$sex;

$sql="select * from empleados where idEmpleado=$iden;";

$filas = $base->query($sql);

foreach ($filas as $fila){
    var_dump($fila);
}

/* if (()==false) {
    header('Location:error.php');
    }
    //header('Location:updUsu1.php');
else{
    
    }
} */
?>