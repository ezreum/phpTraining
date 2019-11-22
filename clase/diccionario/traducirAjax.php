<?php session_start();?>
<head>
<meta charset="UTF-8">
<script>
var x;
function consultar(){
    var palabra=document.getElementById("busqueda").value;
    var idioma=document.getElementById("idioma").value;
    var enviar="palabra="+palabra+"&idioma="+idioma;
    x = new XMLHttpRequest();
    x.open("POST", "ajaxConsulta.php", true);
    x.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    x.setRequestHeader("X-Requested-With","XMLHttpRequest");
    x.send(enviar);
    x.onreadystatechange = function(){
        if (x.readyState==4 &&x.status==200){
        }
        	document.getElementById("respuesta").value=x.responseText;
    }
}

</script>
</head>
<body>
<form id="datos">
<label>Palabra</label>
<input id="busqueda" type="text"/>
<br/>

<label>Traducción</label>
<input id="respuesta" type="text"/>
<br/>

<select id="idioma" onchange="consultar();">
		<option value="es">Español</option>
		<option value="en">Inglés</option>
		<option value="fr">Francés</option>
</select>

</form>
<button onclick="consultar()">consultar</button>

</body>