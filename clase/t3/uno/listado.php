<?php
$coleccion=$_COOKIE['coleccionable'];
echo "<table border=\"1\">";
echo "<tr><th>NombreGalleta</th><th>ContenidoGalleta</th></tr>";
foreach ($coleccion as $v => $k) {
    echo "<tr><td>$v</td><td>$k</td></tr>";
}
echo "</table>";
?>