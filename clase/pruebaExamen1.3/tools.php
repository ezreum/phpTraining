<?php
require_once 'Carta.php';

function prepararBaraja() {
    $mazo = [];
    $figuras=["as","dos","tres","cuatro","cinco","seis","siete","sota","caballo","rey"];
    $palos=["oros","copas","espadas","bastos"];
    foreach ($palos as $palo){
        foreach ($figuras as $k => $figura){
            $nCarta=$figura." de ".$palo;
            $val = ($k<7?$k+1:0.5);
            $image= "img/".substr($palo,0,1).($k+1).".jpg";
            $carta = new Carta($nCarta,$val,$image);
            $mazo[] = $carta;
        }
    }
    return $mazo;
}

?>