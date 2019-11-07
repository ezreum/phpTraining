<?php session_start() ?>
<html>

	<head>
	
	<title>Add Task</title>
	
	</head>

	<body>
	
	<form action="addPost.php" method="POST">
	<label>nombre de la tarea</label>
	<input type="text" name="tarea"/>
	<br/>
	<label>empleado</label>
	<select name="empleado">
	<option>Pepe</option>
	<option>Ana</option>
	<option>Juan</option>
	</select>
	<br/>
	<input type="submit" value="asignar"/>
	</form>
	<a href="panel.php">volver al panel</a>
	</body>

</html>
