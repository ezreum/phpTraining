<?php
require_once '../rb.php';
require_once '../util.php';
$persona = isset($_POST['persona'])?$_POST['persona']:'';
$idPais = isset($_POST['idPais'])?$_POST['idPais']:'';
$relacionReside = isset($_POST['relacionReside'])?$_POST['relacionReside']:'';
$relacionNace = isset($_POST['relacionNace'])?$_POST['relacionNace']:'';
$aficionGusta=isset($_POST['gusta'])?$_POST['gusta']:'';
$aficionOdia=isset($_POST['odia'])?$_POST['odia']:'';



prepRB();

$p=R::dispense('persona');

$p->nombre=$persona;

$bo=true;

$paisN=R::findOne('pais','id=?',[$relacionNace])!=null?R::findOne('pais','id=?',[$relacionNace]):null;
$paisR=R::findOne('pais','id=?',[$relacionReside])!=null?R::findOne('pais','id=?',[$relacionReside]):null;

$p->pais_nace=$paisN;
$p->pais_reside=$paisR;

$bo = $paisR==null||$paisN==null?false:$bo;

if ($bo){
    foreach ($aficionGusta as $aficion){
        $real = R::findOne('aficion', 'id=?',$aficion);
    $aficionGusta != null || $aficionGusta != ''?$p->SharedAficionList[]=$real:'';
    }
    foreach ($aficionOdia as $aficion){
    $real = R::findOne('aficion', 'id=?',$aficion);
    $aficionOdia != null || $aficionOdia != ''?$p->SharedAficionList[]=$aficion:'';
    }
}
    

if($bo){
    R::store($p);
    header('Location:personas.php');
}
else {
    header('Location:error.php');
}

?>