<?php session_start();?>
<head>
<meta charset="utf-8">
</head>
<body>
<h1>Bienvenido al diccionario</h1>
<form action="add.php">
<input type="submit" value="añadir palabras"/>
</form>
<form action="traducirAjax.php">
<input type="submit" value="traducciones"/>
</form>

<hr/>
<?php if (isset($_SESSION['diccionario']['permanente'])):?>
<h3>Palabras que actualmente configuran el diccionario</h3>
	<table>
	<tr>
	<th>Español</th><th>inglés</th><th>francés</th>
	</tr>
	<?php foreach ($_SESSION['diccionario']['permanente'] as $entrada):?>
	<tr>
	<td><?=$entrada['es']?></td><td><?=$entrada['en']?></td><td><?=$entrada['fr']?></td>
	</tr>
	<?php endforeach;?>
	</table>
<?php endif;?>
</body>