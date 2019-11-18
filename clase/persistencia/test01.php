<?php
require_once 'rb.php';



R::setup('mysql:host=localhost;dbname=test','ruben','1234');

$p = R::dispense('persona');

$p-> nombre ='Pepe';

$p-> ap1 ='Sánchez';
$p-> ap2 ='Pérez';

R::store($p);

?>