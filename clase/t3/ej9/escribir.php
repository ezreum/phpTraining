<?php
session_start();
$activo=$_SESSION['_activo'];
?>
<html>
	<head>
	<title>escritura</title>
	</head>
	<body>
	<input type="text" name="de" value=<?=$activo?> readonly/>
	<br/>
	<input type="text" name="para" value="" readonly/>
	</body>
</html>