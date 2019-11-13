<?php
$f= fopen('datos.txt', 'w+');

echo "abierto".PHP_EOL;
$lineas="";
for ($i =   0; $i < 10; $i++) {
    $lineas .= "linea".$i."/n";
}
    file_put_contents('datos.txt', $lineas);


fclose($f);

echo "cerrado";

?>