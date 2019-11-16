<!DOCTYPE html>

<html>

    <head>
        <title>TraductorAjax</title>
        
        <script>
        var x;
			function pintar(){
			
				var idioma=document.querySelector('input[name="idioma"]:checked').value;
				x = new XMLHttpRequest();
				x.open("GET", "ajaxCall.php?idioma="+idioma, true);
				x.send();
				x.onreadystatechange = function(){
					if (x.readyState==4 &&x.status==200){
			            }
			            pintarTraduccion();
						} 
					}

			function pintarTraduccion(){
				var y = x.responseText.split("·");
				document.getElementById("palabra").innerHTML=y[0];
				document.getElementById("traduccion").innerHTML=y[1];
				document.getElementById("boton").innerHTML=y[2];
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
        
        <img src="banderas/fr.png" alt="fr"  width="40px" height="20px">
        <input type="radio" name="idioma" value="fr" <?= $pais=='fr'?'checked="checked"':'';?>
        onchange="pintar()">

        <hr/>

        <label id="palabra">palabra</label>
        <input type="text" name=""/>
        <br/>
        <label id="traduccion">traducción</label>
        <input type="text" name=""/>
	
		<br/>
		<button id="boton">enviar</button>
    </form>

    </body>

</html>