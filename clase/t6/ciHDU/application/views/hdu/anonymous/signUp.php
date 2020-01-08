<div class="container">

<h1>Nuevo usuario</h1>

<form action="<?= base_url()?>hdu/anonymous/signUpPost" enctype="multipart/form-data" method="POST">
<label>Nombre</label>
<input name="nombre" type="text"/>
<br/>
<label>Nick (deberá ser único)</label>
<input name="nick" type="text"/>
<br/>
<input type="file" name="pic"/>
<br/>
<label>Password</label>
<input name="pwd" type="password"/>
<br/>
<label>repeat your password</label>
<input name="pwdCheck" type="password"/>
<br/>
	Nace
  <select name="Nace">
<?php foreach ($paises as $pais):?>
  <option value="<?= $pais->id ?>"><?=$pais->nombre ?> </option>
  <?php endforeach;?>
  </select>
  Reside
  <select name="Reside">
 <?php foreach ($paises as $pais):?>
  <option value="<?= $pais->id ?>"><?=$pais->nombre ?> </option>
  <?php endforeach;?>
  </select>
  <br/>
  
  <input type="submit" value="añadir persona">
</form>

</div>