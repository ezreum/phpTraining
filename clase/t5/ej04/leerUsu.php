<?php
require_once '../util.php';
$bd=conectarDB();

$sql = <<<sql
select * from empleados;
sql;

$filas = $bd->query($sql);
?>
<a href="panel.php">Ir al inicio</a>
<hr/>

<table>
<tr><th>ID</th><th>Nombre</th><th>Apellido</th><th>teléfono</th><th>sexo</th></tr>
<?php foreach ($filas as $fila): ?>
	<tr>
	<td><?= $fila['idEmpleado']?></td><td><?= $fila['nombre']?></td><td><?= $fila['apellido']?></td><td><?= $fila['telefono']?></td><td><?= $fila['sexo']?></td>
	</tr>
<?php endforeach;?>
</table>
