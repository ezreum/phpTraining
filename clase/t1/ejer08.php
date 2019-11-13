<?php
/*
 * Dado un día, decir cuanto a transcurrido desde entonces hasta ahora
 */
$cumple=mktime(0,0,0,6,8,1994);
$actual=time();
echo $actual."\n";
echo $cumple."\n";
$filas = $actual - $cumple;
echo $filas.PHP_EOL;
$años = $filas/60/60/24/365;
$meses = $años-25;
$meses = $meses*12;
$dias = $meses - 3;
$dias = $dias*30;
$años = (int)$años;
$meses = (int)$meses;
$dias =(int)$dias;
echo "desde mi cumpleaños han pasado ".$años." años ".$meses." meses y ".$dias." dias";
?>