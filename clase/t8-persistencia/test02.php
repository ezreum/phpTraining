<?php
require_once 'rb.php';


R::setup('mysql:host=localhost;dbname=test','root','');
$c = R::dispense('coche');

$c-> mat ='1234';

$c-> marca ='Seat';
$c->  modelo='León';

R::store($c);

?>