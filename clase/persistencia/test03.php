<?php
require_once 'rb.php';

$p = R::load('persona',1);

if ($p->id==0){
    echo "no existe";
}
else{
    echo $p->nombre;
}