<div class="container">
<h1>Lista de personas</h1>

<table class="table table-hover">
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
		
		
		
		</tr>
	<?php endforeach;?>


</table>
<br/>
<a href="<?= base_url()?>persona/create" ><button>Crear nueva persona</button></a>
</div>