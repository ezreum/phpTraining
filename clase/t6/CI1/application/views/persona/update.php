<div class="container">
<h1>Persona a modificar</h1>
<form action="<?= base_url() ?>persona/updatePost" method="post">
<input name="id" type="hidden" value="<?=$persona->id ?>"/>
<br/>
<label>Nombre</label>
<input name="nombre" type="text" value="<?=$persona->nombre ?>"/>
<br/>
<label>Pais nace</label>
<select name="paisN">
<?php foreach ($paises as $pais) :?>
<?php $a=$persona->nace->nombre==$pais->nombre?'selected="selected"':'';?>
<option  value="<?= $pais==null?'':$pais->id; ?>"<?= $a?> ><?= $pais==null?'':$pais->nombre; ?></option>
<?php endforeach;?>
</select>
<label>Pais reside</label>
<select name="paisR">
<?php foreach ($paises as $pais) :?>
<?php $a=$persona->reside->nombre==$pais->nombre?'selected="selected"':'';?>
<option  value="<?= $pais==null?'':$pais->id; ?>" <?= $a?>><?= $pais==null?'':$pais->nombre; ?></option>
<?php endforeach;?>
</select>


<br/>

<label>aficiones gusta</label>
<!-- es mejor buscar las aficiones entre todas -->


<?php foreach ($persona-> aggr ('ownGustoList','aficion') as $gusto) {
    $idsGusto[]=$gusto->id;
}?>

<?php foreach ($aficiones as $aficion):?>
   
		 
		 <input name="gusto[]" type="checkbox" value="<?= $aficion->id?>"
		 <?=in_array($aficion->id, $idsGusto)?'checked=checked':''?>/>
		 <?= $aficion->nombre?> 
		   <?php endforeach; ?>
		   
<br/>
<label>aficiones odia</label>

<?php foreach ($persona-> aggr ('ownOdioList','aficion') as $odio) {
    $idsOdio[]=$odio->id;
}?>
<?php foreach ($aficiones as $aficion):?>
<?php foreach ($persona->ownOdioList as $odio):?>
  
		 <?php endforeach;?>
		 <input name="odio[]" type="checkbox" value="<?= $aficion->id?>"
		 <?=in_array($aficion->id, $idsOdio)?'checked=checked':''?>/>
		 <?= $aficion->nombre?> 
		   <?php endforeach; ?>
<br/>

<button type="submit">modificar</button>
</form>
</div>