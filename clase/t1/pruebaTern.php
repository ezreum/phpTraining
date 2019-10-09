<?php
echo "primero nombre".PHP_EOL;
fscanf(STDIN, "%s\n", $e);
$a=[];
$r = 1;
$may=0;
$min=100;
while ($e != "fin"){
    echo "Ahora edad\n";
    $e != "fin" ? fscanf(STDIN, "%d\n", $i): false;
    $a[$e]= $i;
    $may < $i ? $may = $i : FALSE;
    $min > $i ? $min = $i : FALSE;
    echo "primero nombre".PHP_EOL;
    fscanf(STDIN, "%s\n", $e);
}
foreach ($a as $nombre => $edad){
    echo $r++ . "." ." nombre " . $nombre." ".$edad."\n";
}
echo "TAL CUAL\n";
asort($a);
foreach ($a as $nombre => $edad){
    echo $r++ . "." ." nombre " . $nombre." ".$edad."\n";
}
echo "ORDENADO\n";
echo "La mayor edad es ".$may."\n";
echo "La menor edad es ".$min."\n";
?>