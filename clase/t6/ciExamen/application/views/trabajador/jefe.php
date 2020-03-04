<h1>Añadir jefe</h1>
<form action="<?= base_url()?>trabajador/jefePost" method="post">

<input type="hidden" name="currito" value="<?=$currito?>"/>

<select name="jefe">
<?php foreach ($jefes as $jefe):?>
	<option value="<?= $jefe->id?>"><?= $jefe->nombre?></option>
<?php endforeach;?>
</select>

<input type="submit" value="AsignarJefe"/>

</form>