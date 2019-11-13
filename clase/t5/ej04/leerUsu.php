<?php
require_once '../util.php';
$bd=conectarDB();

$sql = <<<sql
select * from empleados;
sql;

$filas = $bd->query($sql);
?>

<table>
<tr><th>ID</th><th>Nombre</th><th>Apellido</th><th>teléfono</th><th>sexo</th></tr>
<?php foreach ($filas as $fila): ?>
	<tr>
	<?php foreach ($fila as $col => $dato): ?>
	<td><?= $dato?></td>
	<?php endforeach;?>
	</tr>
<?php endforeach;?>
</table>
