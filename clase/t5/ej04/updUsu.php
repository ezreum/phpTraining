<body>
<form action="updUsuPost.php" method="POST">
<fieldset>
<legend>Seleccionar trabajador a modificar por alguno de sus rasgos</legend>

<h3>id</h3>
<input name="id" type="text"/>

<h3>nombre</h3>
<input name="nom" type="text"/>

<h3>apellido</h3>
<input name="ape" type="text"/>

<h3>teléfono</h3>
<input name="telf" type="text"/>

<h3>sexo</h3>
<input name="sexo" type="radio" value="H" />H
<input name="sexo" type="radio" value="M" />M
<input name="sexo" type="radio" value="U" />U

<input type="submit" value="buscar empleado"/>
</fieldset>
</form>
<script type="text/javascript">
var inp = document.getElementsByTagName('input');
for (var i = inp.length-1; i>=0; i--) {
if ('radio'===inp[i].type) inp[i].checked = false;
}
</script>
</body>