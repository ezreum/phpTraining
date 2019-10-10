<?php
$nombre = isset($_GET['ncookie'])?$_GET['ncookie']:'';
$content = isset($_GET['ncontent'])?$_GET['ncookie']:'';
if (!isset($_COOKIE[$nombre])) {
    //crear niveles de rutas mediante ifs
    $ruta = isset($_GET['nivel'])?$_GET['nivel']:'';
    if ($ruta == 0) {
        pathinfo('./');
    }
    elseif ($ruta == 1){
        pathinfo('./uno');
    }
    elseif ($ruta == 2) {
        pathinfo('./uno/dos');
    }
    else $ruta ="Te has equivocado listillo";
    
    setcookie($nombre,$content,0,$ruta);
    echo"¡La cookie ha sido puesta!";
}
else {echo "te vas sin cookie (nueva)";}
?>
<form action="ej03.php">
<label for="principal">vuelta a la principal</label>
<input id="principal" type="submit" value="volver"/>
</form>