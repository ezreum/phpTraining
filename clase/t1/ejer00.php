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
fscanf(STDIN, "%d\n", $i);
for ($i=1;$i!=0; $z++){
    $bloque[$z] = $i;
    echo "Fallaste, prueba otra vez\n";
    fscanf(STDIN, "%d\n", $i);
}
echo "Acertaste, ve un paz";

for ($i=0, $size = count($bloque);$i<$size;$i++){
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
echo "Máximo ".$bloque[$i];
   




?>