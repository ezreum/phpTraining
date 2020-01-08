<div class="container">
<h1>Lista de personas</h1>

<table class="table table-hover">
	<tr>
		<th>Nombre</th>
		<th>Nick</th>
	<th>Nace</th>
	<th>Reside</th>
	</tr>
	
	
	<tr>
	<?php foreach ($personas as $persona):?>
		
		<?php if ($persona->nick!=$_SESSION['_user']->nick):?>
		<td> <?= $persona->nombre ?> </td>
		
		<?php if ($persona->extension!=null||$persona->extension!=''):?>
		<td><img class="img-fluid" alt="cara" src="<?=base_url().'assets/upload/'.$persona->id.'.'.$persona->extension ?>" width="50 px"> </td>
		<?php else:?>
		
		<td><img class="img-fluid" alt="cara" src="<?=base_url().'assets/img/user.png'?>" width="50 px"> </td>
		
		
		<?php endif;?>
		
		<td> <?= $persona->nick ?> </td>
		<td> <?= $persona->nace==null?'':$persona->nace->nombre; ?> </td>
		<td> <?= $persona->reside==null?'':$persona->reside->nombre; ?> </td>
		</tr>
		<?php endif;?>
	<?php endforeach;?>


</table>
<br/>
<?php if ($_SESSION['_user']=='administrador')?>
<a href="<?= base_url()?>persona/create" ><button>Crear nueva persona</button></a>
</div>