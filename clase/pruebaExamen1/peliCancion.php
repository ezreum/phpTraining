<?php
//require_once 'peliAjax.php';
?>
<html>
<head>

<script>
function getPeli(){
	var query=document.getElementById("pelicula").name;
	var x = new XMLHttpRequest();
	var res;
	x.open("GET", "PeliAjax.php?peli="+query, true);
	x.send();
	x.onreadystatechange = function(){
		if (x.readyState==4 &&x.status==200){
			res=x.responseText;
			document.getElementById("pelicula").value=res;
		}
			}
	document.getElementById("pelicula").value=query;
		}

function getCancion(){
	var query=document.getElementById("cancion").name;
	var x = new XMLHttpRequest();
	var res;
	x.open("GET", "PeliAjax.php?cancion="+query, true);
	x.send();
	x.onreadystatechange = function(){
		if (x.readyState==4 &&x.status==200){
			res=x.responseText;
			document.getElementById("cancion").value=res;
		}
			}
	document.getElementById("cancion").value=query;
	
		}
</script>

</head>

<body>
<button onclick="getPeli();">Pelicula favorita</button>
<input name="peli" id="pelicula" type="text"  value="pulsa el boton"/>
<br/>
<button onclick="getCancion();">Cancion favorita</button>
<input name="cancion" id="cancion" type="text" value="pulsa el boton"/>

</body>
</html>