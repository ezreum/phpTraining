<?php
session_start();
require_once 'tools.php';

$bool = isset($_SESSION['baraja']);
?>


<h1>Siete y media</h1>

<a href="jugadaPost.php">
	<button>sacar carta</button>
</a>

<h3>Jugada</h3>
<?php 
if ($bool):
?>



<?php else:?>
<p>(Todavia no se han jugado cartas)</p>
<?php endif;?>

<a href="jugadaBanca.php">
	<button>plantarse</button>
</a>

<form action="incializar.php">
	<input type="submit" value="Nuevo juego" name="nuevo"/>
</form>