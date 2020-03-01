<?php
/*Dada una línea de texto y un número entre 1 y 6, 
 * generar una código HTML que contenga dicha línea entre tags <hX> crecientes 
 * desde 1 hasta n y luego decreciendo hasta 1 de nuevo.
 */

    echo "introduce una frase para ver distintos tamaños de fuentes\n";
    fscanf(STDIN, "%[^\n]", $linea);
    echo "Introduce el número de ciclos con un maximo de 6\n";
    fscanf(STDIN, "%d\n", $num);
    $rnum=$num;
    $alerta = "El número introducido es correcto\n";
    $num > 6 ? ($num=6)&&($alerta = "tu numero se convirtió en 6\n"):FALSE;
    echo $alerta;
    for ($i=1;($i<=$num); $i++){
     echo "<h$i> $linea <h$i>\n";   
    }
    for ($i=$rnum; $i>=1; $i--){
     echo "<h$i> $linea <h$i>\n";
    }
?>