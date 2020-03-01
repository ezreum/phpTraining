<?php
/*
 * Pedir infinitos números enteros 
 * (hasta que se introduzca) el cero. 
 * Indicar finalmente cuál fue el máximo y cuál fue el mínimo.
 */

$i =1;
$z=0;
$bloque = array();
echo "solo el numero correcto te permitirá salir del bucle";
echo "\n";
fscanf(STDIN, "%d\n", $e);
for ($i=0; $e!=0; $i++){
    $bloque[$i] = $e;
    echo "Fallaste, prueba otra vez\n";
    fscanf(STDIN, "%d\n", $e);
}
echo "Acertaste, ve un paz";

$size = count($bloque);

for ($i=0; $i<$size-1; $i++){
    $r=$bloque[$i];
    $t=$bloque[$i+1];
    if ($r>$t){
        $bloque[$i]=$t;
        $bloque[$i+1]=$r;
    }
    else {
        $bloque[$i]=$r;
        $bloque[$i+1]=$t;
    }
    
}
echo "\n";
echo "Mínimo ".$bloque[0]."\n";
echo "Máximo ".$bloque[(sizeof($bloque)-1)];
   




?>