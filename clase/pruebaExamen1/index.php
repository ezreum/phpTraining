<?php
header('Content-Type: text/html; charset=utf-8');
$cota = isset($_COOKIE['primer'])?'<h3>Escribe un número o número válido<h3>':'';
$cota1 = isset($_COOKIE['segun'])?'<h3>Escribe un número o número válido<h3>':'';
unset($_COOKIE);
?>
<form action="signos.php">
<label> introduce dos números entre 1 y 12</label>
<br/>
<label>cota inferior</label>
<input type="text" name="primer"/>
<?= $cota?>
<label>cota superior</label>
<input type="text" name="segun"/>
<?= $cota1?>
<br/>
<input type="submit" value="enviar"/>
</form>