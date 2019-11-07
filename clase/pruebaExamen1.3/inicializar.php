<?php
session_start();
if (isset($_GET['nuevo'])){
    unset($_SESSION);
}
require_once 'tools.php';
function prepararBaraja() {
    $mazo = [];
    foreach ($palos as $palo){
        foreach ($figuras as $k => $figura){
            $nCarta=$figura." de ".$palo;
            $val = ($k<7?$k+1:0.5);
            $image= "img/"."".".jpg";
            $carta = new carta($nCarta,$val,$image);
            $mazo[] = $carta;
        }
    }
    return $mazo;
}

if (!isset($_SESSION['baraja'])){
    $_SESSION['baraja'] = prepararBaraja();
}
//header('Location:jugada.php');
?>