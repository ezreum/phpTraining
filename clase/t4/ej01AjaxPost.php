<?php
$bool = (isset($_SERVER['HTTP_X_REQUESTED_WITH'])) && (strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest');
    $activo = isset($_POST['nombre']) ? $_POST['nombre'] : 'No introdujiste nombre';
    $apellido = isset($_POST['apellido']) ? $_POST['apellido'] : 'No introdujiste apellido';
    $pais = isset($_POST['pais']) ? $_POST['pais'] : 'nada';

    $numero = rand(1, 3);
    if ($bool){
    echo "<h$numero>¡Hola $activo $apellido!</h$numero>";

    if ($pais != 'nada') {
        echo "<h$numero>y eres de $pais</$numero>";
    }
} else {
    echo "Solo peticiones via AJAX";
}
?>