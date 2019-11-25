<?php
require_once '../rb.php';
require_once '../util.php';
$persona = isset($_POST['persona'])?$_POST['persona']:'';
$idPais = isset($_POST['idPais'])?$_POST['idPais']:'';
$relacionReside = isset($_POST['relacionReside'])?$_POST['relacionReside']:'';
$relacionNace = isset($_POST['relacionNace'])?$_POST['relacionNace']:'';

prepRB();

$p=R::dispense('persona');

$p->nombre=$persona;

$bo=true;

$paisN=R::findOne('pais','id=?',[$relacionNace])!=null?R::findOne('pais','id=?',[$relacionNace]):null;
$paisR=R::findOne('pais','id=?',[$relacionNace])!=null?R::findOne('pais','id=?',[$relacionNace]):null;

$p->pais_nace=$paisN;
$p->pais_reside=$paisR;

$bo = $paisR==null||$paisN==null?false:$bo;

if($bo){
    R::store($p);
    header('Location:personas.php');
}
else {
    header('Location:error.php');
}

?>