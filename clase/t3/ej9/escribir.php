<?php
session_start();
$activo=$_SESSION['_activo'];
$para=isset($_GET['name'])?$_GET['name']:'';
?>
<html>
	<head>
	<title>escritura</title>
	</head>
	<body>
	<form action="escribirPost.php" method="POST">
	<label>De: </label>
	<input type="text" name="de" value=<?=$activo?> readonly/>
	<br/>
	<label>Para: </label>
	<input type="text" name="para" value=<?=$para?> readonly/>
	<br/>
	<textarea name="texto" cols="40" rows="9" placeholder="Escribe tu texto a enviar"></textarea>
	<br/>
	<input type="submit" value="enviar mensaje"/>
	</form>
	</body>
</html>