<div class="container">
<h1>Lista de paises</h1>

<table class="table table-hover">
	<tr>
	<th>Nombre</th>
	</tr>
	
	
	<tr>
	<?php foreach ($paises as $pais):?>
	<tr>
		<td> <?= $pais->nombre ?> </td>
		<td>
		<form action="<?=base_url()?>pais/updateGet" method="post">
		<input type="hidden" name="paisU" value="<?= $pais->id ?>" /> 
		<button type="submit">
		<img class="img-thumbnail" src="<?=base_url()?>assets/img/lapiz.png" width="30px" height="30px"/>
		</button>
		</form>
		</td>
		<td>
		<form action="<?=base_url()?>pais/deletePost" method="post">
		<input type="hidden" name="paisD" value="<?= $pais->id ?>" /> 
		<button type="submit">
		<img class="img-thumbnail" src="<?=base_url()?>assets/img/basura.png" width="30px" height="30px"/>
		</button>
		</form>
		</td>
		</tr>
	<?php endforeach;?>


</table>
<br/>
<a href="<?= base_url()?>pais/create" ><button>Crear nuevo país</button></a>
</div>