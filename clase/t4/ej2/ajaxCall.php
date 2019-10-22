<?php
include_once 'info.php';

$aguja = isset($_GET['comunidad'])?$_GET['comunidad']:'';

if (in_array($aguja, $comunidades)>0){
    $contenido = $comunidades['$aguja'];
    echo $contenido;
}

?>