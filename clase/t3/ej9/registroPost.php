<?php

$activo = isset($_POST['nombre']) ? $_POST['nombre'] : '';
$pwd = isset($_POST['pwd']) ? $_POST['pwd'] : '';

require_once 'utilito.php';
if ($activo == '' && $pwd == '') {
    echo <<<html
html;
    header('Location:registro.php');
} else {
    if (! crearUsuario($activo, $pwd)) {
        echo <<<HTML
    <h2>El usuario ya existe, intentalo de nuevo</h2>
HTML;
    header('refresh:3;url=registro.php');
    } else {echo <<<html
    <h2>Éxito, redirigiendo</h2>
html;
        header('refresh:3;url=login.php');
    }
}

?>