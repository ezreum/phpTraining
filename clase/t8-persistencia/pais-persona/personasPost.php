<?php
require_once '../rb.php';
require_once '../util.php';
$persona = isset($_POST['persona'])?$_POST['persona']:'';
$idPais = isset($_POST['idPais'])?$_POST['idPais']:'';
prepRB();

$p=R::dispense('persona');

$p->nombre=$persona;
$p->pais=$idPais;
$bo=true;

$bo=R::findOne('pais','nombre=?',[$persona])!==null?false:true;

if($bo){
    R::store($p);
    header('Location:personas.php');
}
else {
    header('Location:error.php');
}

?>