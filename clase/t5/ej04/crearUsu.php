<form action="crearUsuPost.php" method="POST">
<fieldset>
<legend>Datos a proporcionar</legend>

<h3>nombre</h3>
<input name="nom" type="text"/>

<h3>apellido</h3>
<input name="ape" type="text"/>

<h3>teléfono</h3>
<input name="telf" type="text"/>

<h3>sexo</h3>
<input name="sexo" type="radio" value="H"/>H
<input name="sexo" type="radio" value="M"/>M
<input name="sexo" type="radio" value="U"/>U

<input type="submit" value="insertar"/>
</fieldset>
</form>