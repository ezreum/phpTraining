<?php
$numero = isset($_GET['primer'])?$_GET['primer']:'';
$numero1 = isset($_GET['segun'])?$_GET['segun']:'';

if (($numero=='')||($numero1=='')||(!is_numeric($numero))||(!is_numeric($numero1))||($numero<=0)||($numero1>=13)) {
    setcookie('primer',$numero);
    setcookie('segun',$numero1);
    header('Location:index.php');
}

$signos = ["Capricornio", "Acuario", "Piscis", "Aries", "Tauro", "Géminis", "Cáncer", "Leo", "Virgo", "Libra", "Escorpio", "Sagitario"];
?>

<form action="signosPost.php">
<fieldset>
<legend>signos del zodiaco</legend>

<?php foreach ($signos as $signo):?>
<input name="signo" type="radio" value="<?= $signo ?>" <?php echo $signo == 'Capricornio'?' checked':'';?> />
<label><?=$signo?></label>
<br/>
<?php endforeach;?>

</fieldset>

<fieldset>
<legend>Meses del año</legend>

<?php $meses = ["enero","febrero","marzo","abril","mayo","junio","julio","agosto","septiembre","octubre","noviembre","diciembre"]; ?>
 <select name="mes">
<?php foreach ($meses as $mes):?>
<option><?= $mes?></option>
<?php endforeach;?>
</select>

</fieldset>


<input type="submit" value="enviar"/>


</form>