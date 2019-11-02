<?php
require_once 'util.php';
echo "Escribe el nombre del usuario";
fscanf(STDIN,"%s", $nombre);
echo "Escribe la contraseña del usuario";
fscanf(STDIN,"%s", $pwd);
echo "Escribe el nombre del esquema";
fscanf(STDIN,"%s", $esquema);

$base=conectarDB($nombre, $pwd, $esquema);

$nombres = [];
$nombres[] = "clientes";

?>