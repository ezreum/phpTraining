<h1>Lista de personas</h1>

<table border="1">
	<tr>
		<th>Nombre</th>
	<th>Nace</th>
	<th>Reside</th>
	<th>Gusta</th>
	<th>Odia</th>
	</tr>
	
	
	<tr>
	<?php foreach ($personas as $persona):?>

		<td> <?= $persona->nombre ?> </td>
		<td> <?= $persona->nace==null?'':$persona->nace->nombre; ?> </td>
		<td> <?= $persona->reside==null?'':$persona->reside->nombre; ?> </td>
		
		<td>
		<?php foreach ($persona-> aggr ('ownGustoList','aficion') as $gusto):?>
		    
		 <?= $gusto->nombre?> 
		   <?php endforeach; ?>
		 </td>
		
		<td>
		<?php foreach ($persona-> aggr ('ownOdioList','aficion') as $gusto):?>
		    
		 <?= $gusto->nombre?> 
		 
		   <?php endforeach; ?>
		</td>
		
		<td>
		<form action="<?=base_url()?>persona/updateGet" method="post">
		<input type="hidden" name="personaU" value="<?= $persona->id ?>" /> 
		<button type="submit">modificar</button>
		</form>
		</td>
		<td>
		<form action="<?=base_url()?>persona/deletePost" method="post">
		<input type="hidden" name="personaD" value="<?= $persona->id ?>" /> 
		<button type="submit">eliminar</button>
		</form>
		</td>
		
		
		</tr>
	<?php endforeach;?>


</table>
<br/>
<a href="<?= base_url()?>persona/create" ><button>Crear nueva persona</button></a>
