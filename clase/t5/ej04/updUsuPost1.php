<?php
require_once '../util.php';
session_start();
$nom = isset($_POST['nom'])?$_POST['nom']:null;
$ape = isset($_POST['ape'])?$_POST['ape']:null;
$telf = isset($_POST['telf'])?$_POST['telf']:null;
$sexo = isset($_POST['sexo'])?$_POST['sexo']:null;

$bd=conectarDB();

$id=$_SESSION['empleadoUpd'];



$id !=null?$iden = "idEmpleado = $id": '';

$sql='';
$prueba;

if($id!=null&&$nom!=null&&$ape!=null&&$telf!=null&&$sexo!=null){
$sql="update empleados set  
nombre=?,
apellido=?,
telefono=?,
sexo=?
where $iden";

$prueba="todo";
}
else{
    
    if ($nom!=null) {
        $sql="update empleados set
nombre=?
where $iden";
        $prueba="nombre";
    }
    elseif ($ape!=null) {
        $sql="update empleados set
apellido=?
where $iden";
        $prueba="ape";}
        
elseif ($telf!=null) {
    $sql="update empleados set
telefono=?
where $iden";
    $prueba="telf";}
elseif ($sexo!=null) {
    $sql="update empleados set
sexo=?
where $iden";
    $prueba="sexo";}
     else {
        header('Location:error.php');
    }
}



if ($preparada = $bd->prepare($sql)!=false) {
    if ($prueba=='todo'){
    $preparada->execute([$nombre,$ape,$telf,$sexo]);
    }
    else{
        switch ($prueba){
            case 'nombre':{
                
            }
        }
    }
}

?>