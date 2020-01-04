<div class="container">
<h1>Lista de aficiones</h1>

<table class="table table-hover">
	<tr>
	
	<th>Nombre</th>
	</tr>
	
	<?php foreach ($aficiones as $aficion):?>
		<tr>
		<td> <?= $aficion->nombre ?> </td>
				<td>
		<form action="<?=base_url()?>aficion/updateGet" method="post">
		<input type="hidden" name="aficionU" value="<?= $aficion->id ?>" /> 
		<button type="submit">
		<img class="img-thumbnail" src="<?=base_url()?>assets/img/lapiz.png" width="30px" height="30px"/>
		</button>
		</form>
		</td>
		<td>
		<form action="<?=base_url()?>aficion/deletePost" method="post">
		<input type="hidden" name="aficionD" value="<?= $aficion->id ?>" /> 
		<button type="submit">
		<img class="img-thumbnail" src="<?=base_url()?>assets/img/basura.png" width="30px" height="30px"/>
		</button>
		</form>
		</td>
		</tr>
		
	<?php endforeach;?>


</table>

<br/>
<a href="<?= base_url()?>aficion/create" ><button>Crear nueva afición</button></a>
</div>