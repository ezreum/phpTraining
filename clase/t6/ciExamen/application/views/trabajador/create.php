<div class="container">
<h1>Nueva Persona</h1>

<form action="<?= base_url()?>trabajador/createPost" method="POST">
<label>Nombre</label>
<input name="nombre" type="text"/>

<br/>
	Nace
  <select name="nace">
<?php foreach ($paises as $pais):?>
  <option value="<?= $pais->id ?>"><?=$pais->nombre ?> </option>
  <?php endforeach;?>
  </select>
  <br/>
  ¿Alguna afición?
  <?php foreach ($aficiones as $aficion):?>
  <input name="aficiones[]" type="checkbox" 
  value="<?= $aficion->id ?>"/><?= $aficion->nombre ?>
  <?php endforeach;?>
  <br/>
  <input type="submit" value="añadir persona">
</form>
</div>