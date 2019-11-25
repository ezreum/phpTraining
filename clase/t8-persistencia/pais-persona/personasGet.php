<?php require_once '../rb.php';
require_once '../util.php';
prepRB();  

$paises=R::findAll('pais');
?> 

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
  <input type="submit" value="añadir persona">
</form>