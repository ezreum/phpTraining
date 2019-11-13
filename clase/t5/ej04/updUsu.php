<body>
<form action="updUsuPost.php" method="POST">
<fieldset>
<legend>Seleccionar trabajador a modificar por alguno de su id</legend>

<h3>id</h3>
<input name="id" type="text"/>

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