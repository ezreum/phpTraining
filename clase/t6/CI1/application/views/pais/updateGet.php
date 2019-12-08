<h1>Pais a modificar</h1>
<form action="<?= base_url() ?>pais/updatePost" method="post">
<label>ID</label>
<input name="id-old" type="text" value="<?=$pais->id ?>" readonly/>
<input name="id" type="hidden" value="<?=$pais->id ?>"/>
<br/>
<label>Nombre</label>
<input name="nombre-old" type="text" value="<?=$pais->nombre ?>" readonly/>
<input name="nombre" type="text" value="<?=$pais->nombre ?>"/>
<br/>
<button type="submit">modificar</button>
</form>