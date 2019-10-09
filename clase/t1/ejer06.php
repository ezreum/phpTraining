<?php
/* $tiempo = time();
$tiempo = date('D d M Y',$tiempo);
echo $tiempo."\n";
$tiempo = '20-3-1993';
$t = strtotime($tiempo); */


setlocale(LC_ALL, "es_ES");
$ts = mktime(0,0,0,10,20,1993);
$r = strftime("%B, $ts");
echo $r;
?>