<h1>Pais a modificar</h1>
<form action="<?= base_url() ?>pais/updatePost" method="post">
<input name="id-old" type="hidden" value="<?=$pais->id ?>" />
<input name="id" type="hidden" value="<?=$pais->id ?>"/>

<label>Nombre</label>
<input name="nombre-old" type="hidden" value="<?=$pais->nombre ?>" />
<input name="nombre" type="text" value="<?=$pais->nombre ?>"/>
<br/>
<button type="submit">modificar</button>
</form>
