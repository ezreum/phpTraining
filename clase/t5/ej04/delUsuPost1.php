<?php
require_once '../util.php';
session_start();
$id=$_SESSION['empleadoDel']['idEmpleado'];

$bd = conectarDB();

$sql= "delete from empleados where idEmpleado=?";

if ($id=!null){
    $preparada = $bd->prepare($sql);
    $preparada->execute([$id]);
    header('Location:delUsuInfo.php');
}
else{
    header('Location:error.php');
}