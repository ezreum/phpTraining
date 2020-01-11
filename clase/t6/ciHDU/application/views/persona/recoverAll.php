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
		
		<?php if ( isset($_SESSION['_user']) && $_SESSION['_user']->hasPriv->nombre=='admin' ):?>
		
		<td>
		<form action="<?=base_url()?>user/updateGet" method="post">
		<input type="hidden" name="persona" value="<?= $persona->nick ?>" /> 
		<button type="submit">
		<img class="img-thumbnail" src="<?=base_url()?>assets/img/lapiz.png" width="30px" height="30px"/></button>
		</form>
		</td>
		<td>
		<form action="<?=base_url()?>user/delete" method="post">
		<input type="hidden" name="persona" value="<?= $persona->nick ?>" /> 
		<button type="button" onclick="entrar()">
		<img class="img-thumbnail" src="<?=base_url()?>assets/img/basura.png" width="30px" height="30px"/></button>
		</form>
		</td>
		<?php endif;?>
		</tr>
		<?php endif;?>
	<?php endforeach;?>


</table>
<br/>
<?php if ($_SESSION['_user']->hasPriv->nombre=='admin'):?>
<a href="<?= base_url()?>persona/create" ><button>Crear nueva persona</button></a>
<?php endif;?>
</div>