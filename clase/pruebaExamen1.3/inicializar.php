<?php
session_start();
require_once 'tools.php';

if (isset($_GET['nuevo'])){
    unset($_SESSION);
}



if (!isset($_SESSION['baraja'])){
    $_SESSION['baraja'] = prepararBaraja();
}

header('Location:jugada.php');
?>