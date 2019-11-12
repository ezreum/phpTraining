<?php
$f= fopen('datos.txt', 'r');

echo "abierto".PHP_EOL;

while (! feof($f)) {
    $linea = fgets($f);
    
    echo $linea.PHP_EOL;
}


fclose($f);

echo "cerrado";

?>