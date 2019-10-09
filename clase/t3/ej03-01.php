<?php
$nombre = isset($_GET['ncookie'])?$_GET['ncookie']:'';
$content = isset($_GET['ncontent'])?$_GET['ncookie']:'';
if (!isset($_COOKIE[$nombre])) {
    //crear niveles de rutas mediante ifs
    $ruta;
    setcookie($nombre,$content,0,$ruta);
    echo"¡La cookie ha sido puesta!";
}
else {echo "te vas sin cookie (nueva)";}
?>
<form action="ej03.php">
<label for="principal">vuelta a la principal</label>
<input id="principal" type="submit" value="volver"/>
</form>