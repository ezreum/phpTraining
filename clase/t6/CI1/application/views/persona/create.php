<h1>Nueva Persona</h1>

<form action="personasPost.php" method="POST">
<label>Nombre</label>
<input name="persona" type="text"/>
<br/>
	Reside
  <select name="relacionNace">
<?php foreach ($paises as $pais):?>
  <option value="<?= $pais->id ?>"><?=$pais->nombre ?> </option>
  <?php endforeach;?>
  </select>
  Vive
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