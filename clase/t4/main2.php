<head>
	<script type="text/javascript">
function refrescar() {
	var x = new XMLHttpRequest();
	x.open("GET", "ajaxej.php", true);
	x.send();
	x.onreadystatechange = function(){
		if (x.readyState==4 &&x.status==200){
			alert("me llego el paquete");
			document.getElementById("nuevo").innerHTML=x.responseText;
			}
		}
	}
	</script>
</head>
<h1>Hola INFO</h1>
<h2>Hola INFO</h2>
<h3>Hola INFO</h3>
<h4 id="nuevo">Hola INFO</h4>
<button onclick='refrescar();'>refrescar</button>