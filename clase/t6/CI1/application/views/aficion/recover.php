<h1>Lista de aficiones</h1>

<table border="1">
	<tr>
		<th>ID</th>
	<th>Nombre</th>
	</tr>
	
	<?php foreach ($aficiones as $aficion):?>
		<tr>
		<td> <?= $aficion->id ?> </td>
		<td> <?= $aficion->nombre ?> </td>
		</tr>
	<?php endforeach;?>


</table>

<br/>
<a href="<?= base_url()?>aficion/create" >Crear nueva afición</a>
<br/>
<a href="<?= base_url()?>aficion/update">Modificar afición</a>
<br/>
<a href="<?= base_url()?>aficion/delete">Eliminar afición</a>