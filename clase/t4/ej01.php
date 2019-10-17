<head>
	<script type="text/javascript">
function refrescar() {
	var x = new XMLHttpRequest();
	var res;
	x.open("GET", "ej01-01.php?nombre="+document.getElementById("nombre").value+"&apellido="+document.getElementById("apellido").value, true);
	x.send();
	x.onreadystatechange = function(){
		if (x.readyState==4 &&x.status==200){
			res=x.responseText;
			//document.getElementById("caja").innerHTML=x.responseText;
			document.getElementById("caja").innerHTML=res;
			}
		}
	}
	</script>
</head>

<label for="nombre">escribe tu nombre</label>
<input id="nombre" type="text" name="nombre"/>
<label for="apellido">escribe tu nombre</label>
<input id="apellido" type="text" name="apellido"/>
<div id="caja"></div>
<button onclick='refrescar();'>refrescar</button>
