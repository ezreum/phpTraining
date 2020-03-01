<?php
require_once 'utiles/utilHTML.php';
$numero = isset($_POST["numero"])?$_POST["numero"]:'';
$numeros = [];
for ($i = 1; $i <= $numero; $i++) {
    $numeros[]=$i;
}

?>
<?php if($numero !='' && ($numero>0 && $numero<16) ):?>
<form method="post" action="ej18-2.php">
<label>Selecciona una opcion</label>
<?php echo pintarRadio("numeros", $numeros)?>
<br/>
<input type="submit" value="calcular"/>
</form>
<?php endif;?>