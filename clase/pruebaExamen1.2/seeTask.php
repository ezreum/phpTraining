<?php
session_start();
?>

<h1>Lista de tareas</h1>

<ul>
<?php foreach ($_SESSION as $empleado => $tareas):?>
	<li><?= $empleado ?></li>
	<ul>
	<?php foreach ($tareas as $tarea):?>
	<li><?= $tarea ?></li>
	<?php endforeach;?>
	</ul>
<?php endforeach;?>
</ul>
<br/>
<a href="panel.php">volver al panel</a>