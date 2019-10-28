<?php require_once 'info.php';
$caSelec = isset($_GET['comunidad'])?$_GET['comunidad']:'Andalucía';?>
<html>
<head>
<title>Comunidades y provincias</title>

<script>

var x;
var res='';

function pintarSelect(){
var aux=x.responseText;
var aux2 = aux.split('&');
res='<select id="provincia">';
for(provincia of aux2){
res+="<option>"+provincia+"</option>";
}
res+="</select>";
document.getElementById("provincia").innerHTML=res;
}

function refrescar() {
	x = new XMLHttpRequest();
	var queryString = document.getElementById("comunidad").value;
	x.open("GET", "ajaxCall.php?comunidad="+queryString, true);
	x.send();
	x.onreadystatechange = function(){
		if (x.readyState==4 &&x.status==200){
            }
            pintarSelect();
			}
		}

</script>

</head>
<body>

	<form id="form">
		<label for="comunidad">CCAA</label> 
		<select id="comunidad"
			name="comunidad" onchange="refrescar();">
	<?php foreach($comunidades as $comunidad => $contenido) :?>
	<option value="<?=$comunidad?>" <?= $comunidad==$caSelec?'selected="selected"':'';?>>
	<?= $comunidad ?>
	</option>
	<?php endforeach; ?>
</select>
	
<br/>

	<label for="provincia">Provincia(s)</label>
	<select id="provincia" name="provincia">

	<?php foreach($comunidades[$caSelec] as $provincia): ?>
<option >
	<?= $provincia ?>
</option>
	<?php endforeach; ?>

</select>
</form>
</body>
</html>