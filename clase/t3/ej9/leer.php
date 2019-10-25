<?php
session_start();
$usuario = isset($_GET['name'])?$_GET['name']:'';
    echo "<table><tr><th>numero de mensaje</th><th></th><th>Remitente</th><th></th><th>Fecha</th><th></th><th></th><th>Texto</th></tr>";
    $numMen=1;
foreach ($_SESSION['usuarios'][$_SESSION['_activo']]['mensajes'][$usuario] as $mensaje){
    foreach ($mensaje as $r => $mensajito){
        echo "<tr>";
        echo "<td>$numMen.</td><td></td> <td>{$mensajito['remitente']} </td><td></td><td>{$mensajito['fecha']}</td><td></td><td></td><td>{$mensajito['texto']}</td>";
        echo "</tr>";
        $numMen++;
        }
    }
    echo "</table>";

echo <<<listaUsuario
    <a href="listaUsuarios.php">Bandeja de entrada</a>
listaUsuario;
?>