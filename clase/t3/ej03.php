<html>
<head>
<title>Ejercicio 3</title>
</head>
<body>
<h1>Listado de cookies por nivel</h1>
</br>
<p>Nivel0 --> <a href="listado.php">Listado de cookies</a></p>
<p>Nivel0 --> Nivel1 --> <a href="uno/listado.php">Listado de cookies</a></p>
<p>Nivel0 --> Nivel1 --> Nivel2 --><a href="uno/dos/listado.php">Listado de cookies</a></p>

<h2>Creación de cookies en diferentes niveles(directorios) por un script ubicado en /</h2>
<h3>Se permite fijar nombre y contenido de la cookie, así como el nivel</h3>
</br>
<form action="ej03-01.php">
<fieldset>
<legend>creacion de cookie</legend>
<label for="ncookie">Nombre</label>
<input id="ncookie" type="text" name="ncookie"/>
<label for="ncontent">Contenido</label>
<input id="ncontent" type="text" name="ncontent"/>
</br>
<label for="nivel">nivel</label>
<select id="nivel" name="nivel">
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
</select>
<input type="submit" value="Crea cookie"/>
</fieldset>
</form>
</body>
</html>