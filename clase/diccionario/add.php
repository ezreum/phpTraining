<?php session_start();?>
<head>
<meta charset="utf-8">
</head>
<body>
<h1>Bienvenido al añadidor de palabras</h1>
<form action="addPost.php" method="POST">
<label>español</label>
<input name="es" type="text"/>
<br/>
<label>inglés</label>
<input name="en" type="text"/>
<br/>
<label>francés</label>
<input name="fr" type="text"/>
<br/>
<input type="submit" value="añadir palabras al temporal"/>
</form>
<form action="addPost.php" method="POST">
<input type="submit" value="volcar palabras al permanente" <?= sizeof($_SESSION['diccionario']['temporal'])>0?'':'disabled';?>/>
<input type="hidden" name="volcar"/>
</form>
<a href="panel.php">volver al panel</a>
<hr/>
<?php if (isset($_SESSION['diccionario']['temporal'])):?>
<h3>Palabras en memoria</h3>
	<table>
	<tr>
	<th>Español</th><th>inglés</th><th>francés</th>
	</tr>
	<?php foreach ($_SESSION['diccionario']['temporal'] as $entrada):?>
	<tr>
	<td><?=$entrada[es]?></td><td><?=$entrada[en]?></td><td><?=$entrada[fr]?></td>
	</tr>
	<?php endforeach;?>
	</table>
<?php endif;?>
</body>