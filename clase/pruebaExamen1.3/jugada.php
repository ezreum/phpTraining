<?php
require_once 'tools.php';
require_once 'Carta.php';
session_start();
isset($_SESSION['baraja'])?'':header('Location:inicializar.php');
$quitar='';
$numero=1;
?>


<h1>Siete y media</h1>

<h3>Jugada</h3>
<?php 
if (isset($_SESSION['jugador'])&& $_SESSION['jugador']!==[]):



?>

<?php $acc=0;?>
	<table>
	<tr>
	<?php foreach ($_SESSION['jugador'] as $carta): ?>
		<td>
			<?php 
			$imagenCarta = <<<img
 <img src="$carta->img" alt="carta" width="150px" height="200px"/>
img;
			$acc += $carta->valor ?>
			<?= $imagenCarta?> (total: <?= $acc ?>)
			<?php if ($acc>7.5){
			    $numero=$acc;
			
			}?>
		</td>
	<?php endforeach;?>
	
</tr>
</table>

<?= $numero>7.5?'<h3>Te has pasado, has perdido</h3>':''; ?>

<?php else:?>
<p>(Todavia no se han jugado cartas)</p>
<?php endif;?>

<a href="jugadaPost.php">
	<button <?= $numero>7.5?'disabled':'';?>>sacar carta</button>
</a>

<a href="jugadaBanca.php">
	<button>plantarse</button>
</a>

<form action="inicializar.php">
	<input type="submit" value="Nuevo juego" name="nuevo"/>
</form>