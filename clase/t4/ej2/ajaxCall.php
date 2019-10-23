<?php
include_once 'info.php';

$aguja = isset($_GET['comunidad'])?$_GET['comunidad']:'';

if (array_key_exists($aguja, $comunidades)){
    $contenido = $comunidades["$aguja"];
    echo $contenido;
}

?>