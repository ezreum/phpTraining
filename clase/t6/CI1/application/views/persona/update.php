<h1>Persona a modificar</h1>
<form action="<?= base_url() ?>persona/updatePost" method="post">
<input name="id-old" type="hidden" value="<?=$persona->id ?>" />
<input name="id" type="hidden" value="<?=$persona->id ?>"/>
<br/>
<label>Nombre</label>
<input name="nombre-old" type="hidden" value="<?=$persona->nombre ?>" />
<input name="nombre" type="text" value="<?=$persona->nombre ?>"/>
<br/>
<label>Pais nace</label>
<input name="nace-old" type="hidden" value="<?= $persona->nace==null?'':$persona->nace->nombre; ?>" />
<input name="nace" type="text" value="<?= $persona->nace==null?'':$persona->nace->nombre; ?>"/>
<br/>
<label>Pais reside</label>
<input name="paisR-old" type="hidden" value="<?= $persona->nace==null?'':$persona->reside->nombre; ?>" />
<input name="paisR" type="text" value="<?= $persona->reside==null?'':$persona->reside->nombre; ?>"/>
<br/>

<label>aficiones gusta</label>
<input name="aficionG-old" type="hidden" value="<?= $persona->nace==null?'':$persona->reside->nombre; ?>" />
<!-- es mejor buscar las aficiones entre todas -->
<!-- La vista no debería de manipular tanto la información -->
<?php foreach ($aficiones as $aficion):?>
<?php foreach ($persona-> aggr ('ownOdioList','aficion') as $gusto):?>
 <?php $y=$aficion->id == $gusto->aficion?'checked=checked':''; ?>	   
 <?=$aficion->id.' '.$gusto->aficion ?> 
		 <?php endforeach;?>
		 <input name="gusto[]" type="checkbox" value="<?= $aficion->nombre?>"<?=$y ?>/>
		 <?= $aficion->nombre?> 
		   <?php endforeach; ?>
		   
<br/>
<label>aficiones odia</label>
<input name="aficionO-old" type="hidden" value="<?= $persona->nace==null?'':$persona->reside->nombre; ?>" />
<select name="aficionO" type="select">

<?php foreach ($persona-> aggr ('ownOdioList','aficion') as $gusto):?>
<option value="$gusto->nombre">		    
		 <?= $gusto->nombre?> 
		 </option>
		   <?php endforeach; ?>
<br/>

<button type="submit">modificar</button>
</form>
