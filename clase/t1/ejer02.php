<?php
echo "Dame un numero para el ciclo";
fscanf(STDIN, "%d\n", $u);
echo "Ahora el numero de cada ciclo";
fscanf(STDIN, "%d\n", $t);

for ($i=1;$i<=$u;$i++){
    echo $i.". ";
    for ($e = 1; $e <= $t; $e++) {
        echo $e." ";
    }
        echo "\n";
}



?>