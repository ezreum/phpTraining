<?php
require_once 'utiles/utilHTML.php';
for ($i = 1; $i < 51; $i++) {
   echo $i%2==1?highlightText($i):$i;
   echo "\n";
}

?>