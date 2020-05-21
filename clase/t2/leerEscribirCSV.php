<?php

$file = fopen("listado.csv","r");
$actual='';
$max=0;
$min=0;
$sitio = fopen('resultado.csv', 'a+');
fputcsv($sitio, ['provincia','minimo','maximo'], ',');
fclose($sitio);
fgetcsv($file);
while($info = fgetcsv($file))
{
    $infoAux = explode(',', $info[0]);
    $infoLinea = explode(';', $infoAux[0]);
    
    if ($max==0 && $min==0) {
        $actual = $infoLinea[0];
        $max=$infoLinea[2];
        $min=$infoLinea[2];
    }
    if ($actual != $infoLinea[0]) {
        $paquete[0] = $actual;
        $paquete[1] = $min;
        $paquete[2] = $max;
        $destino = fopen('resultado.csv', 'a+');
        fputcsv($destino, $paquete, ',');
        fclose($destino);
        $actual = $infoLinea[0];
        $max = 0;
        $min =0;
    }
    
    isset($infoLinea[2]) && !empty($infoLinea[2]) && $max<$infoLinea[2]?$max=$infoLinea[2]:'';
    (isset($infoLinea[2]) && !empty($infoLinea[2]) && ($min>$infoLinea[2]) || $min==0)?$min=$infoLinea[2]:'';
}

fclose($file);
?>