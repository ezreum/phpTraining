<script>

	function entrar(){

		if(confirm('There is no way back!')){

		document.forms[1].submit();
		}
		else{

		}

	}

</script>


<div class="container">
<h1>Lista de personas</h1>

<table class="table table-hover">
	<tr>
		<th>Nombre</th>
		<th>Foto</th>
	<th>Nace</th>
	<th>Reside</th>
	<th>Gusta</th>
	<th>Odia</th>
	</tr>
	
	
	<tr>

	
		<td> <?= $persona->nombre ?> </td>
		
		<td><img class="img-fluid" alt="cara" src="<?=base_url().'assets/upload/'.$persona->id.'.'.$persona->extension ?>" width="50 px"> </td>
		
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
		<form action="<?=base_url()?>user/updateGet" method="post">
		<input type="hidden" name="persona" value="<?= $persona->nick ?>" /> 
		<button type="submit">
		<img class="img-thumbnail" src="<?=base_url()?>assets/img/lapiz.png" width="30px" height="30px"/></button>
		</form>
		</td>
		<td>
		<form action="<?=base_url()?>user/delete" method="post">
		<input type="hidden" name="persona" value="<?= $persona->id ?>" /> 
		<button type="button" onclick="entrar()">
		<img class="img-thumbnail" src="<?=base_url()?>assets/img/basura.png" width="30px" height="30px"/></button>
		</form>
		</td>
		
		
		</tr>
	


</table>
<?php if ($_SESSION['_user']->hasPriv->nombre=='admin'):?>
<br/>
<a href="<?= base_url()?>hdu/anonymous/signUp" ><button>Crear nueva persona</button></a>
<?php endif;?>
</div>