<?php
if (isset($_GET['borrar'])) {
   setcookie('galleta');
   echo "Bienvenido Desconocido";
} else {
header('Pagina prueba cookies');
if (!isset($_COOKIE['galleta'])){
echo "<h1>Bienvenido a la Página</h1>";
setcookie('galleta',1);
}
else {
    $cookie = $_COOKIE['galleta']+1;
    setcookie('galleta',$cookie);
    echo "el numero de veces que has visitado la pagina es $cookie";
}
}
?>

<form>
<input type="hidden" name="borrar"/>
<input type="submit" value="borrar cookies"/>
</form>