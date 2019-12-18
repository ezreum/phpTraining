<h1>Lista de personas</h1>

<table class="table table-hover">
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
		    
		 <?= $gusto->nombre!=null?$gusto->nombre:'';?> 
		   <?php endforeach; ?>
		 </td>
		
		<td>
		<?php foreach ($persona-> aggr ('ownOdioList','aficion') as $odio):?>
		    
		 <?= $odio->nombre!=null?$odio->nombre:'';?> 
		 
		   <?php endforeach; ?>
		</td>
		
		<td>
		<form action="<?=base_url()?>persona/updateGet" method="post">
		<input type="hidden" name="personaU" value="<?= $persona->id ?>" /> 
		<button type="submit">
		<img class="img-thumbnail" src="<?=base_url()?>assets/img/lapiz.png" width="30px" height="30px"/></button>
		</form>
		</td>
		<td>
		<form action="<?=base_url()?>persona/deletePost" method="post">
		<input type="hidden" name="personaD" value="<?= $persona->id ?>" /> 
		<button type="submit">
		<img class="img-thumbnail" src="<?=base_url()?>assets/img/basura.png" width="30px" height="30px"/></button>
		</form>
		</td>
		
		
		</tr>
	<?php endforeach;?>


</table>
<br/>
<a href="<?= base_url()?>persona/create" ><button>Crear nueva persona</button></a>
