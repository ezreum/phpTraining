<?php
session_start();

if (isset($_SESSION['baraja'])) {
    $numero = rand(0,sizeof($_SESSION['baraja'])-1);
    $_SESSION['jugador'][] = $_SESSION['baraja'][$numero];
    unset($_SESSION['baraja'][$numero]);
    $_SESSION['baraja'] = array_values($_SESSION['baraja']);
    header("Location:jugada.php");
}
else {
    header("Location:inicializar.php");
}



?>