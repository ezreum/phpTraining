<?php
require_once '../util.php';
session_start();
$nom = isset($_POST['nom']) ? $_POST['nom'] : null;
$ape = isset($_POST['ape']) ? $_POST['ape'] : null;
$telf = isset($_POST['telf']) ? $_POST['telf'] : null;
$sexo = isset($_POST['sexo']) ? $_POST['sexo'] : null;

$bd = conectarDB();

$id = $_SESSION['empleadoUpd']['idEmpleado'];


if ($id != null && $nom != null && $ape != null && $telf != null && $sexo != null) {
    $sql = <<<SQL
update empleados set  
    nombre=?,
    apellido=?,
    telefono=?,
    sexo=?
where idEmpleado=?
SQL;

    $preparada = $bd->prepare($sql);

    $preparada->execute([
        $nom,
        $ape,
        $telf,
        $sexo,
        $id
    ]);
    header('Location:updUsuInfo.php');
} else {
    header('Location:error.php');
}
?>