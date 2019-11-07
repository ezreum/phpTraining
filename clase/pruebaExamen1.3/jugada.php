<?php
session_start();
isset($_GET['nuevo']) ? unset($_SESSION) : '';
?>
<h1>Siete y media</h1>
<h3>Jugada</h3>
<?php 
$bool=false;
if ($bool):
?>



<?php else:?>
<p>(Todavia no se han jugado cartas)</p>
<?php endif;?>

<form action=jugadaPost.php method="POST">
	<input type="submit" value="Sacar carta"/>
</form>

<form action=jugadaBanca.php>
	<input type="submit" value="plantarse"/>
</form>

<form>
	<input type="submit" value="Nuevo juego" name="nuevo"/>
</form>