<div class="container">
<h1>Lista de aficiones</h1>


<table class="table table-hover">
	<tr>
	<th>Nombre</th>
	</tr>
	
	
	<tr>

<?php foreach ($aficiones as $aficion):?>
	<td><?= $aficion->nombre ?></td>

	<td>
		<form action="<?=base_url()?>pais/updateGet" method="post">
		<input type="hidden" name="pais" value="<?= $aficion ->id ?>" /> 
		<button type="submit">
		<img class="img-thumbnail" src="<?=base_url()?>assets/img/lapiz.png" width="30px" height="30px"/>
		</button>
		</form>
		</td>
		<td>
		<form action="<?=base_url()?>pais/deletePost" method="post">
		<input type="hidden" name="pais" value="<?= $aficion->id ?>" /> 
		<button type="submit">
		<img class="img-thumbnail" src="<?=base_url()?>assets/img/basura.png" width="30px" height="30px"/>
		</button>
		</form>
		</td>

	</tr>
<?php endforeach;?>

</div>