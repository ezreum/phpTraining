<?php
require_once '../rb.php';
require_once '../util.php';
$pais = isset($_POST['pais'])?$_POST['pais']:'';

prepRB();

$p=R::dispense('pais');

$p->nombre=$pais;

$bo=true;

$bo=R::findOne('pais','nombre=?',[$pais])!==null?false:true;

if($bo){
    R::store($p);
    header('Location:paises.php');
}
else {
    header('Location:error.php');
}

?>