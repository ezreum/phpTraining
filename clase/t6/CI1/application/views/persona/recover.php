<h1>Lista de personas</h1>

<table border="1">
	<tr>
		<th>ID</th>
	<th>Nombre</th>
	</tr>
	
	
	<tr>
	<?php foreach ($personas as $persona):?>
		<td> <?= $persona->id ?> </td>
		<td> <?= $persona->nombre ?> </td>
		</tr>
	<?php endforeach;?>


</table>
<br/>
<a href="<?= base_url()?>persona/create" >Crear nueva persona</a>
<br/>
<a href="<?= base_url()?>persona/update">Modificar persona</a>
<br/>
<a href="<?= base_url()?>persona/delete">Eliminar persona</a>