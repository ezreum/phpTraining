<?php
session_start();
require_once 'tools.php';

// if (isset($_GET['nuevo'])){
//     unset($_SESSION['baraja']);
// }



/* if (!isset($_SESSION['baraja'])){ */
    $_SESSION['jugador']=[];
    $_SESSION['baraja'] = prepararBaraja();
    $_SESSION['total']=0;
    $_SESSION['total']['banca']=0;
    if (isset($_SESSION['banca'])){
        unset($_SESSION['banca']);
    }

if ( !isset($_SESSION['ganadas']) && !isset($_SESSION['perdidas'])) {
    $_SESSION['ganadas']=0;
    $_SESSION['perdidas']=0;
    }
header('Location:jugada.php');
?>