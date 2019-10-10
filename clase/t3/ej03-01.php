<?php
$nombre = isset($_GET['ncookie']) ? $_GET['ncookie'] : '';
$content = isset($_GET['ncontent']) ? $_GET['ncookie'] : '';
$nivel = isset($_GET['nivel']) ? $_GET['nivel'] : '';

$ruta = pathinfo($_SERVER['REQUEST_URI'])['dirname'];

if ($nivel == 0) {
    $ruta .= '/';
} elseif ($nivel == 1) {
    $ruta .= '/uno/';
} elseif ($nivel == 2) {
    $ruta .= '/uno/dos/';
} else
    $ruta = "Te has equivocado listillo";

setcookie($nombre, $content, 0, $ruta);
echo "¡La cookie ha sido puesta! en ";
echo "<pre>";
print_r($ruta);
echo "</pre>";
?>
<form action="ej03.php">
	<label for="principal">vuelta a la principal</label> <input
		id="principal" type="submit" value="volver" />
</form>