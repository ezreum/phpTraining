<?php
require_once '../rb.php';
require_once '../util.php';
$idPersona= isset($_POST['persona'])?$_POST['persona']:'';

prepRB();

$eliminar=R::load('persona',$idPersona);

R::trash($eliminar);


header('Location:personas.php');



?>
