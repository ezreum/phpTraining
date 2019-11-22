<?php
require_once '../rb.php';
require_once '../util.php';
$idPais= isset($_POST['pais'])?$_POST['pais']:'';

prepRB();  

$eliminar=R::load('pais',$idPais);

R::trash($eliminar);


header('Location:paises.php');



?>

