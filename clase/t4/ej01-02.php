<head>
<script type="text/javascript"
	src="https://storage.googleapis.com/google-code-archive-downloads/v2/code.google.com/form-serialize/serialize-0.2.min.js"></script>
<script type="text/javascript">
function refrescar() {
	var x = new XMLHttpRequest();
	var queryString = serialize(document.getElementById("datos"));
	var res;
	x.open("GET", "ej01-01.php?"+queryString, true);
	x.send();
	x.onreadystatechange = function(){
		if (x.readyState==4 &&x.status==200){
			res=x.responseText;
			document.getElementById("caja").innerHTML=res;
			}
		}
	}
	</script>
</head>
<body>
	<form id="datos">
		<label for="nombre">escribe tu nombre</label> <input id="nombre"
			type="text" name="nombre" /> <label for="apellido">escribe tu nombre</label>
		<input id="apellido" type="text" name="apellido" /> <br /> <label
			for="pais">escribe tu país</label> <input id="pais" type="text"
			name="pais" />
	</form>

	<div id="caja"></div>
	<button onclick='refrescar();'>refrescar</button>
</body>