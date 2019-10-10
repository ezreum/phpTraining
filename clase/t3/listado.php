<?php
$coleccion=$_COOKIE;
echo "<table border=\"1\">";
echo "<tr><th>NombreGalleta</th><th>ContenidoGalleta</th></tr>";
foreach ($_COOKIE as $k => $v) {
    echo "<tr><td>$k</td><td>$v</td></tr>";
}
echo "</table>";
?>