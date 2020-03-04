<?php
require_once '../util.php';

$base = conectarDB();

$sql = <<<SQL
        select * from trabajadores
SQL;


$resultado = $base->query($sql);

if (!$resultado) {
    echo "algo fue mal, ERROR";
} else{
    foreach ($resultado as $fila){
        echo "<h1>trabajador: ".$fila['nombre']."</h1>";
    }
}

?>