<?php session_start();?>
<!DOCTYPE html>

<html>

<head>
<title>JuegoAjax</title>

<script>
var y;
var x;
var nMaquina;
var numero;
var lower;
var higher;
var win;

function pintar(){
    
    var idioma=document.querySelector('input[name="idioma"]:checked').value;
    x = new XMLHttpRequest();
    x.open("GET", "ajaxCall.php?idioma="+idioma, true);
    x.send();
    x.onreadystatechange = function(){
        if (x.readyState==4 &&x.status==200){
        }
        pintarRes();
    }
}

function pintarRes(){
    y = x.responseText.split("·");
    document.getElementById("palabra").innerHTML=y[0];
    document.getElementById("boton").innerHTML=y[1];
    document.getElementById("salir").innerHTML=y[2];
    win=y[6];
    higher=y[5];
    lower=y[7];
    jugar();
    numero = y[3]+": "+numero+"<br/>";
    nMaquina = y[4]+": "+nMaquina+"<br/>";
    mostrarMensaje();
    
    
}

function jugar(){
		numero = document.getElementById("numero").value;
		nMaquina = Math.floor(Math.random() * (10 - 1) ) + 1;
		document.getElementById("miDiv").innerHTML='';
		mostrarMensaje();
}
	
function mostrarMensaje(){
	var salida='';
	salida=numero+"<br/>";
	salida+=nMaquina+"<br/>";	
	
	if (numero > nMaquina) {
        salida+=higher;
    } 
    else if(numero < nMaquina){
    	salida+=lower;
    }
    else {
    	salida+=win;
    }
    	document.getElementById("miDiv").innerHTML=salida;
}
 
</script>
</head>

<?php $pais=isset($_GET['pais'])?$_GET['pais']:'es'; ?>

    <body>
        
    <form>

        <img src="banderas/es.png" alt="es" width="40px" height="20px">
        <input type="radio" name="idioma" value="es" <?= $pais=='es'?'checked="checked"':'';?>
        onchange="pintar()">

        <img src="banderas/gb.png" alt="gb"  width="40px" height="20px">
        <input type="radio" name="idioma" value="gb" <?= $pais=='gb'?'checked="checked"':'';?>
        onchange="pintar()">

        <hr/>

        <label id="palabra">introduce un numero(1-10)</label>
        <input id="numero" type="text" name=""/>
		</form>
		<button id="boton" onclick="jugar()">jugar</button>	
    
    
    <div id="miDiv"></div>
    <a href="login.php">
		<button id="salir">salir</button>
		</a>

    </body>

</html>

