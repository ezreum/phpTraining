<?php
session_start();
require_once 'tools.php';
isset($_SESSION['baraja'])?'':header('Location:inicializar.php');
$bool = false;
?>


<h1>Siete y media</h1>

<a href="jugadaPost.php">
	<button>sacar carta</button>
</a>

<h3>Jugada</h3>
<?php 
if (isset($_SESSION['jugador'])&& $_SESSION['jugador']!==[]):
/* $imagenCarta = <<<img
 <img src="" alt="carta"/>
 img;*/

?>

<?php $acc=0;?>
	<ul>
	<?php foreach ($_SESSION['jugador'] as $carta): ?>
		<li>
			<?php $acc += $carta->valor ?>
			<?= $carta->nombre?> (total: <?= $acc ?>)
		</li>
	<?php endforeach;?>
</ul>

<?php else:?>
<p>(Todavia no se han jugado cartas)</p>
<?php endif;?>

<a href="jugadaBanca.php">
	<button>plantarse</button>
</a>

<form action="incializar.php">
	<input type="submit" value="Nuevo juego" name="nuevo"/>
</form>