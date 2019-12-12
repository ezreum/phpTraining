<h1>Persona a modificar</h1>
<form action="<?= base_url() ?>persona/updatePost" method="get">
<input name="id-old" type="hidden" value="<?=$persona->id ?>" />
<input name="id" type="hidden" value="<?=$persona->id ?>"/>
<br/>
<label>Nombre</label>
<input name="nombre-old" type="hidden" value="<?=$persona->nombre ?>" />
<input name="nombre" type="text" value="<?=$persona->nombre ?>"/>
<br/>
<label>Pais nace</label>
<input name="nace-old" type="hidden" value="<?= $persona->nace==null?'':$persona->nace->nombre; ?>" />
<select name="paisN">
<?php foreach ($paises as $pais) :?>
<?php $a=$persona->nace->nombre==$pais->nombre?'selected="selected"':'';?>
<option  value="<?= $pais==null?'':$pais->nombre; ?>"<?= $a?> ><?= $pais==null?'':$pais->nombre; ?></option>
<?php endforeach;?>
</select>
<label>Pais reside</label>
<input name="paisR-old" type="hidden" value="<?= $persona->reside==null?'':$persona->reside->nombre; ?>" />
<select name="paisR">
<?php foreach ($paises as $pais) :?>
<?php $a=$persona->reside->nombre==$pais->nombre?'selected="selected"':'';?>
<option  value="<?= $pais==null?'':$pais->nombre; ?>" <?= $a?>><?= $pais==null?'':$pais->nombre; ?></option>
<?php endforeach;?>
</select>


<br/>

<label>aficiones gusta</label>
<?php foreach ($persona-> aggr ('ownGustoList','aficion') as $gusto):?>
<input name="idsGustoAnt[]" type="hidden" value="<?= $gusto->id==null?'':$gusto->id; ?>" />
<?php echo $gusto->id; endforeach;?>
<!-- es mejor buscar las aficiones entre todas -->
<!-- La vista no debería de manipular tanto la información -->
<?php foreach ($aficiones as $aficion):?>

<?php foreach ($persona-> aggr ('ownGustoList','aficion') as $gusto):?>

<?=$gusto->aficion ?>


 <?php $y=$aficion->nombre == $gusto->aficion?'checked=checked':''; ?>	   
		 <?php endforeach;?>
		 <input name="gusto[]" type="checkbox" value="<?= $aficion->nombre?>"<?=$y ?>/>
		 <?= $aficion->nombre?> 
		   <?php endforeach; ?>
		   
<br/>
<label>aficiones odia</label>
<input name="aficionO-old" type="hidden" value="<?= $persona->nace==null?'':$persona->reside->nombre; ?>" />
<?php foreach ($aficiones as $aficion):?>
<?php foreach ($persona->ownGustoList as $odio):?>
 <?php $y=$aficion->nombre == $odio->nombre?'checked=checked':''; ?>	   
		 <?php endforeach;?>
		 <input name="odio[]" type="checkbox" value="<?= $aficion->nombre?>"<?=$y ?>/>
		 <?= $aficion->nombre?> 
		   <?php endforeach; ?>
<br/>

<button type="submit">modificar</button>
</form>
