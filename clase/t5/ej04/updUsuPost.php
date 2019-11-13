<?php
require_once '../util.php';
session_start();
$id = isset($_POST['id'])?$_POST['id']:null;

$bd=conectarDB();


$id !=null?$iden = "idEmpleado = $id": 'a';


$sql="select * from empleados where $iden";
    
;
/* var_dump($filas); */

if (($filas = $bd->query($sql))==false) {
    header('Location:error.php');
    }
else{
    $_SESSION['empleadoUpd']=$filas;
    header('Location:updUsu1.php');
    }
?>