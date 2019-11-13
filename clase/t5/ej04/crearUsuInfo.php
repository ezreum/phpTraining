<?php session_start(); ?>

<form action="crearUsuPost.php" method="POST">
<fieldset>
<legend>Datos a proporcionar</legend>

<h3>nombre</h3>
<input name="nom" type="text"/>

<h3>apellido</h3>
<input name="ape" type="text"/>

<h3>teléfono</h3>
<input name="telf" type="text"/>

<h3>sexo</h3>
<input name="sexo" type="radio" value="H"/>H
<input name="sexo" type="radio" value="M"/>M
<input name="sexo" type="radio" value="U"/>U

<input type="submit" value="insertar"/>
</fieldset>
</form>
<script type="text/javascript">
var inp = document.getElementsByTagName('input');
for (var i = inp.length-1; i>=0; i--) {
if ('radio'===inp[i].type) inp[i].checked = false;
}
</script>

<a href="panel.php">Ir al inicio</a>

<hr/>
<?php if (isset($_SESSION['inserciones'])):?>
<h3>Inserciones hechas en esta sesión</h3>
<table>
<tr><th>Nombre</th><th>Apellido</th><th>teléfono</th><th>sexo</th></tr>
<?php 
foreach ($_SESSION['inserciones'] as $insercion):
$info = explode(',',$insercion);
?>
<tr>
	<?php foreach ($info as $dato):?>
	<td><?= $dato?></td>
	<?php endforeach;?>
	</tr>
<?php endforeach;?>
</table>
<?php endif;?>