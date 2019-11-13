<?php
require_once 'Carta.php';
session_start();

$jugada = isset($_SESSION['total'])?$_SESSION['total']:null;

if ($jugada!=null) {
    $puntActual=0;
    
    while ($jugada>$puntActual){
        $numero = rand(0,sizeof($_SESSION['baraja'])-1);
        $puntActual += $_SESSION['baraja'][$numero]->valor;
        $_SESSION['banca'][] = $_SESSION['baraja'][$numero];
        unset($_SESSION['baraja'][$numero]);
        $_SESSION['baraja'] = array_values($_SESSION['baraja']);
   
    }
    $puntActual>7.5?$_SESSION['ganadas']+=1:
    $puntActual>=$jugada?$_SESSION['perdidas']+=1:$_SESSION['ganadas']+=1;
    
   header('Location:jugada.php');  
}


?>