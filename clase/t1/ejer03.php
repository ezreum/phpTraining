<?php
/*
 * infinitos numeros y cuando se pulse el 0 preguntar si sumar o multiplicar
 */

echo "Adivina el número para escapar el bucle";
$g = array();
fscanf(STDIN, "%d\n", $e);
while ($e!=0) {
    echo "sigue intentandolo";
    sizeof($g)==0?$g[0]=$e:$g[sizeof($g)]=$e;
    fscanf(STDIN, "%d\n", $e);
}
    echo "quieres sumar o multiplicar, pulsa s o m";

    fscanf(STDIN, "%s\n", $e);

    if ($e=='s') {
        $e=0;
        for ($i = 0; $i < sizeof($g); $i++) {
            $e+=$g[$i];
        }
        echo "La suma de todos los números introducidos es: ".$e;
    }
    else {
        $e=1;
        for ($i = 0; $i < sizeof($g); $i++) {
            $e*=$g[$i];
        }
        echo "La multiplicación de todos los números introducidos es: ".$e;
    }
    
?>