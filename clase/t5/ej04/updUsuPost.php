<?php
require_once '../util.php';
session_start();
$id = isset($_POST['id'])?$_POST['id']:null;

$bd=conectarDB();


$id !=null?$iden = "idEmpleado = $id": '';


$sql="select * from empleados where $iden";
    


if (($filas = $bd->query($sql))==false) {
    header('Location:error.php');
    }
else{
    foreach ($filas as $fila){
        $_SESSION['empleadoUpd']=$fila['idEmpleado'];
    }
    header('Location:updUsu1.php');
    }
?>