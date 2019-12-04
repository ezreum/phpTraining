<h1>Lista de paises</h1>

<table border="1">
	<tr>
		<th>ID</th>
	<th>Nombre</th>
	</tr>
	
	
	<tr>
	<?php foreach ($paises as $pais):?>
		<td> <?= $pais->id ?> </td>
		<td> <?= $pais->nombre ?> </td>
		</tr>
	<?php endforeach;?>


</table>