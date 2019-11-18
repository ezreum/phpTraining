<?php
session_start();
?>

<h3>Empleado a eliminar</h3>
<table>
<tr><th>ID</th><th>Nombre</th><th>Apellido</th><th>teléfono</th><th>sexo</th></tr>
<?php $empleado=$_SESSION['empleadoDel']?>
	<tr>
	<td><?= $empleado['idEmpleado']?></td><td><?= $empleado['nombre']?></td><td><?= $empleado['apellido']?></td><td><?= $empleado['telefono']?></td><td><?= $empleado['sexo']?></td>
	</tr>
</table>
<h3>¿Estás seguro?</h3>
<form action="delUsuPost1.php" method="POST">
<input type="submit" value="eliminar"/>
</form>

<form action="panel.php" method="POST">
<input type="submit" value="cancelar"/>
</form>