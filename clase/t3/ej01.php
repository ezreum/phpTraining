<?php
include_once 'FuncionAleatoria.php';
if (!isset($_COOKIE['UID'])){
    echo "<h1>Hola desconocido. A partir de ahora te recordaré</h1>";
    $aleatorio=generaCadenaAleatoria();
    setcookie("UID",$aleatorio);
}
else {
    echo"<h1>Te conozco</h1>";
}

?>