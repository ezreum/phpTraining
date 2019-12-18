<h1>Nueva Persona</h1>

<form action="<?= base_url()?>hdu/anonymous/signUpPost" method="POST">
<label>Nombre</label>
<input name="nombre" type="text"/>
<br/>
	Nace
  <select name="relacionNace">
<?php foreach ($paises as $pais):?>
  <option value="<?= $pais->id ?>"><?=$pais->nombre ?> </option>
  <?php endforeach;?>
  </select>
  Reside
  <select name="relacionReside">
 <?php foreach ($paises as $pais):?>
  <option value="<?= $pais->id ?>"><?=$pais->nombre ?> </option>
  <?php endforeach;?>
  </select>
  <br/>
  
  <input type="submit" value="añadir persona">
</form>