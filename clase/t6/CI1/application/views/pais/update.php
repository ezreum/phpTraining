<h1>Lista de paises</h1>

<table>
	<tr>
	<th>Nombre</th>
	</tr>
	
	
	
	<?php foreach ($paises as $pais):?>
	<tr>
		<td> <?= $pais->nombre ?> </td>
		<td>
		<form action="<?=base_url()?>pais/updateGet" method="post">
		<input type="hidden" name="pais" value="<?= $pais->id ?>" /> 
		<button type="submit">modificar</button>
		</form>
		</td>
		</tr>
	<?php endforeach;?>


</table>
<br/>
<a href="<?= base_url()?>pais" >menu pais</a>
<br/>
<a href="<?= base_url()?>">home</a>
<br/>
