<?php session_start();?>
<?php $empleado = $_SESSION['empleadoUpd']?>
	

<body>
	<form action="delUsuPost1.php" method="POST">
		<fieldset>
			<legend>Datos a modificar</legend>

			<h3>Escoge todos a la vez</h3>

			<h3>nombre</h3>
			<input name="nom" type="text" value="<?= $empleado['nombre']?>"/>

			<h3>apellido</h3>
			<input name="ape" type="text" value="<?= $empleado['apellido']?>"/>

			<h3>teléfono</h3>
			<input name="telf" type="text" value="<?= $empleado['telefono']?>"/>

			<h3>sexo</h3>
			<input name="sexo" type="radio" value="H" <?= $empleado['sexo']=='H'?'checked':''; ?>/>H 
			<input name="sexo"	type="radio" value="M" <?= $empleado['sexo']=='M'?'checked':''; ?> />M 
			<input name="sexo" type="radio" value="U" <?= $empleado['sexo']=='U'?'checked':''; ?> />U

			<input type="submit" value="modificar" />
		</fieldset>
	</form>
	
</body>