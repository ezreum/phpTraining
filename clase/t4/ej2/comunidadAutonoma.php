<?php require_once 'info.php';?>

<html>
<head>
<title>Comunidades y provincias</title>
<script type="text/javascript"
	src="https://storage.googleapis.com/google-code-archive-downloads/v2/code.google.com/form-serialize/serialize-0.2.min.js"></script>
</script>
<script>

var x;
var res='';

function pintarSelect(){
var aux=x.responseText;
res='<select id="provincia">';
for(provincia of aux){
res+="<option>provincia</option>";
}
res+="</select>";
document.getElementById("provincia").innerHTML=res;
}

function refrescar() {
	x = new XMLHttpRequest();
	var queryString = serialize(document.getElementById("provincia"));
	x.open("GET", "ajaxCall.php?"+queryString, true);
	x.send();
	x.onreadystatechange = function(){
		if (x.readyState==4 &&x.status==200){
            }
            pintarSelect();
			}
		}$inyeccion

</script>
</head>
<body>
<label for="comunidad">CCAA</label>
<select id="comunidad" name="comunidad" onchange="refrescar();">
<?php foreach($comunidades as $comunidad => $provincia) :?>
	<option value="<?=$comunidad?>" ><?=$comunidad?></option>
<?php endforeach; ?>
</select>
<br/>
<label for="provincia">Provincia</label>
<select id="provincia" name="provincia">
<option id = "nombres">{$comunidades['Andalucía'][0]}</option>
</select>
</body>
</html>