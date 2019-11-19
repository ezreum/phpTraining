<?php
require_once 'rb.php';
require_once '../t5/util.php';

prepRB();

$p = R::dispense('persona');

$p-> nombre ='Pepe';

$p-> ap1 ='Sanchez';
$p-> ap2 ='Perez';

R::store($p);
echo "ya";
?>