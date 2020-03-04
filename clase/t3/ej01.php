<?php
include_once 'FuncionAleatoria.php';
if (!isset($_COOKIE['UID'])){
    echo "<h1>Hola desconocido. A partir de ahora te recordaré</h1>";
    $aleatorio=generaCadenaAleatoria();
    setcookie("UID",$aleatorio);
}
else {
    $r;
    if (!isset($_COOKIE['visitas'])) {
        $r=0;
        setcookie("visitas",$r);
    }
    else {
        $r = $_COOKIE['visitas']+1;
        setcookie("visitas", $r);
    }
    echo"<h1>Te conozco</h1>";
    echo "<h2>tu número de visitas es $r</h2>";
}

?>