<?php
/*
 * Dado un número “n”, dibujar líneas desde n caracteres 
 * hasta un carácter disminuyendo en un carácter cada línea que se dibuje. 
 * Repetir el patrón “+” “-” “.” en cada carácter que se imprima.
 */

$resultado=0;
$formas=array("+","-",".");
echo "introduce un número y el programa hará un dibujo".PHP_EOL;
fscanf(STDIN, "%d\n", $resultado);
$e=0;
for ($i=1; $i <= $resultado; $resultado--){
    for ($z=1;$z<=$resultado;$z++){
        echo $formas[$e];
        if ($e==2){
            $e=-1;
        }
        $e++;
    }
    echo "\n";
}
?>