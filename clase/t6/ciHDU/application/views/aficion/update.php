<h1>Afición a modificar</h1>
<form action="<?= base_url() ?>aficion/updatePost" method="post">

<input name="id" type="hidden" value="<?=$aficion->id ?>"/>

<label>Nombre</label>
<input name="nombre" type="text" value="<?=$aficion->nombre ?>"/>
<br/>
<button type="submit">modificar</button>
</form>
