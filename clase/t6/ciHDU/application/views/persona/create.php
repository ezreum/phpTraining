<div class="container">
<h1>Nueva Persona</h1>

<form action="<?= base_url()?>persona/createPost" enctype="multipart/form-data" method="POST">
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
  ¿Alguna afición?
  <select name="gusta[]" multiple>
  <?php foreach ($aficiones as $aficion):?>
  <option value="<?= $aficion->id ?>"><?= $aficion->nombre ?></option>
  <?php endforeach;?>
  </select>
  <br/>
  ¿Odia alguna de la lista?
  <select name="odia[]" multiple>
  <?php foreach ($aficiones as $aficion):?>
  <option value="<?= $aficion->id ?>"><?= $aficion->nombre ?></option>
  <?php endforeach;?>
  </select>
  <br/>
  <input type="submit" value="añadir persona">
</form>
</div>