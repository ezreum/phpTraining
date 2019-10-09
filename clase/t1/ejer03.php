<?php
/*
 * infinitos numeros y cuando se pulse el 0 preguntar si sumar o multiplicar
 */

echo "Adivina el número para escapar el bucle";
$g = array();
while ($e!=0) {
    echo "sigue intentandolo";
    $g[$i]=$e;
    fscanf(STDIN, "%d\n", $e);
    echo $g[$i];
}

?>