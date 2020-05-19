<?php

$file = fopen("listado.csv","r");
$actual='';
$max=0;
$min=0;
fgetcsv($file);
while(! feof($file))
{
    $info = fgetcsv($file);
    $infoAux = explode(',', $info[0]);
    $infoLinea = explode(';', $infoAux[0]);
   
    if ($max==0 && $min==0) {
        $actual = $infoLinea[0];
        $max=$infoLinea[2];
        $min=$infoLinea[2];
    }
    if ($actual != $infoLinea[0]) {
        $linea = $actual.': max='.$max.' min='.$min.PHP_EOL;
        file_put_contents('resultado.txt', $linea, FILE_APPEND);
        $actual = $infoLinea[0];
        $max=0;
        $min=100000;
    }
    $max<$infoLinea[2]?$max=$infoLinea[2]:'';
    $min>$infoLinea[2]?$min=$infoLinea[2]:'';
}

fclose($file);
?>