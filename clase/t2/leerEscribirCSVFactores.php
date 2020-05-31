<?php

$file = fopen("factoresRiesgo","r");
$sitio = fopen('factoresRiesgo.csv', 'a+');
fputcsv($sitio, ['factor','tipo'], ',');
fclose($sitio);

while(!feof($file))
{
    $info = fgets($file);
    $infoAux = explode(',', $info);
    print_r($infoAux).PHP_EOL;
    $destino = fopen('factoresRiesgo.csv', 'a+');
    fputcsv($destino, [$infoAux[0],$infoAux[1]], ',');
    fclose($destino);
        
    }
    

fclose($file);
?>