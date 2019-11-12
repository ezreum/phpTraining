<?php
require_once 'tools.php';
require_once 'Carta.php';
session_start();
isset($_SESSION['baraja'])?'':header('Location:inicializar.php');
$numero=0;
?>


<h1>Siete y media</h1>


<h3>Partidas ganadas: <?= $_SESSION['ganadas'] ?></h3>
<h3>Partidas perdidas: <?= $_SESSION['perdidas'] ?></h3>

<h3>Jugada</h3>
<?php 
if (isset($_SESSION['jugador'])&& $_SESSION['jugador']!==[]):?>

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
			<?= $imagenCarta?>
			<?php $_SESSION['total']=$acc;?>
		</td>
		
	
	


<?php endforeach;?>
</tr>
</table>

	<?php echo "puntuación: ".$_SESSION['total']."<br/>";
	

		 if ($_SESSION['total']>7.5){
            $_SESSION['perdidas']+=1;
			echo '<h3>Te has pasado, has perdido</h3>';
            }?>





<?php else:?>
<p>(Todavia no se han jugado cartas)</p>
<?php endif;?>



<a href="jugadaPost.php">
	<button <?= ($_SESSION['total']>7.5)||(isset($_SESSION['banca']))?'disabled':'';?>>sacar carta</button>
 </a>

<form action="jugadaBanca.php" method="POST">
	<input type="submit" value="plantarse" <?= ($_SESSION['total']>7.5)||isset($_SESSION['banca'])?'disabled':'';?>/>
</form>

<form action="inicializar.php">
	<input type="submit" value="Nuevo juego" name="nuevo"/>
</form>

     
     <?php if (isset($_SESSION['banca'])):?>

<table>
	<tr>
	<?php $cont=0?>
	<?php foreach ($_SESSION['banca'] as $carta): ?>
		<td>
			<?php 
			$imagenCarta = <<<img
 <img src="$carta->img" alt="carta" width="150px" height="200px"/>
img;
			$cont += $carta->valor ?>
			<?= $imagenCarta?> <?php $numero = $cont;?>
			
		</td>
	<?php endforeach;?>  </tr></table>   
	
	
	<?php echo "puntuación: ".$numero;    
	
 	 endif;?>