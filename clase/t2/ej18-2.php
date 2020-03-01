<?php
$numero = isset($_POST["numeros"])?$_POST["numeros"]:'';
$real = $numero;
if ($numero!='') {
    $numero+=2;
}

?>
<h1>Resultado final</h1>
<h1><?= $real ?> + 2 = <?= $numero ?></h1>
