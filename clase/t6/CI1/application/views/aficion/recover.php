<h1>Lista de aficiones</h1>

<table border="1">
	<tr>
		<th>ID</th>
	<th>Nombre</th>
	</tr>
	
	
	<tr>
	<?php foreach ($aficiones as $aficion):?>
		<td> <?= $aficion->id ?> </td>
		<td> <?= $aficion->nombre ?> </td>
		</tr>
	<?php endforeach;?>


</table>