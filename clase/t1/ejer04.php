<?php
echo "elige el número de repeticiones\n";
fscanf(STDIN, "%d\n", $y);
$relleno = ["as","dos","tres","cuatro","cinco","seis","siete","sota","caballo","rey"];
$r=0;
for ($i=0; $i< $y; $i++) {
echo $relleno[$i%10]." ";
}
//foreach ($relleno as $n){
  //  echo $n." ";}
?>