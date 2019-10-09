<?php
echo "Dame un numero para el ciclo";
fscanf(STDIN, "%d\n", $u);
echo "Ahora el numero de cada ciclo";
fscanf(STDIN, "%d\n", $t);
$cont = 0;
for ($i=1;$i<=$t;$i++){
        echo $i." ";
}



/*for ($i=1;$i<=$u;$i++){
*    for ($r=1;$r<=$t;$r++){
*       echo $r." ";
*    }
}*/
?>