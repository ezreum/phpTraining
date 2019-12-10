<h1>Lista de personas</h1>

<table border="1">
	<tr>
		<th>Nombre</th>
	<th>Nace</th>
	<th>Reside</th>
	</tr>
	
	
	<tr>
	<?php foreach ($personas as $persona):?>

		<td> <?= $persona->nombre ?> </td>
		<td> <?= $persona->nace==null?'':$persona->nace->nombre; ?> </td>
		<td> <?= $persona->reside==null?'':$persona->reside->nombre; ?> </td>
		
		
		<?php foreach ($persona->ownGustaList as $gusto):?>
		    <td>
		 <?= $gusto->aficion->nombre?> 
		 </td>
		   <?php endforeach; ?>
		
		
		</tr>
	<?php endforeach;?>


</table>
<br/>
<a href="<?= base_url()?>persona/create" ><button>Crear nueva persona</button></a>
