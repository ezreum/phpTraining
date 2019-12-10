<h1>Lista de aficiones</h1>

<table border="1">
	<tr>
	
	<th>Nombre</th>
	</tr>
	
	<?php foreach ($aficiones as $aficion):?>
		<tr>
		<td> <?= $aficion->nombre ?> </td>
				<td>
		<form action="<?=base_url()?>aficion/updateGet" method="post">
		<input type="hidden" name="aficionU" value="<?= $aficion->id ?>" /> 
		<button type="submit">modificar</button>
		</form>
		</td>
		<td>
		<form action="<?=base_url()?>aficion/deletePost" method="post">
		<input type="hidden" name="aficionD" value="<?= $aficion->id ?>" /> 
		<button type="submit">eliminar</button>
		</form>
		</td>
		</tr>
		
	<?php endforeach;?>


</table>

<br/>
<a href="<?= base_url()?>aficion/create" ><button>Crear nueva afición</button></a>
