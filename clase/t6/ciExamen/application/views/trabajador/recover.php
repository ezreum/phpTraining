<div class="container">
<h1>Lista de trabajadores</h1>

<table class="table table-hover">
	<tr>
	<th>Nombre</th>
	<th>pais</th>
	<th>Gustos</th>
	<th>Jefe</th>
	<th>accion1</th>
	<th>accion2</th>
	</tr>
	
	
	<tr>
	<?php foreach ($trabajadores as $trabajador):?>
	<tr>
		<td> <?= $trabajador->nombre ?> </td>
		
		<td> <?= $trabajador->nace->nombre?></td>
		<td>
		 <?php foreach ($trabajador->aggr ('ownGustoList','aficion') as $gusto){
		    echo $gusto->nombre." ";
		}?></td>
		
		<td>
		<?= $trabajador->jefe?$trabajador->jefe->nombre:'';?>
		</td>
		
		<td>
		<form action="<?=base_url()?>trabajador/updateGet" method="post">
		<input type="hidden" name="pais" value="<?= $trabajador->id ?>" /> 
		<button type="submit">
		<img class="img-thumbnail" src="<?=base_url()?>assets/img/lapiz.png" width="30px" height="30px"/>
		</button>
		</form>
		</td>
		<td>
		<form action="<?=base_url()?>trabajador/deletePost" method="post">
		<input type="hidden" name="pais" value="<?= $trabajador->id ?>" /> 
		<button type="submit">
		<img class="img-thumbnail" src="<?=base_url()?>assets/img/basura.png" width="30px" height="30px"/>
		</button>
		</form>
		</td>
		<td><form action="<?=base_url()?>trabajador/jefe" method="post">
		<input type="hidden" name="currito" value="<?= $trabajador->id ?>" /> 
		<button type="submit">añadirTrabajador</button></form></td>
		
		</tr>
	<?php endforeach;?>
	
	


</table>
</div>