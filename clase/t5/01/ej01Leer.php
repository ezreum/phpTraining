<?php
$name = isset($_GET['nombre'])?$_GET['nombre']:'';
require_once '../util.php';

// =============================================

$base = conectarDB();
$sql = <<<sql
INSERT INTO TRABAJADORES(NOMBRE) VALUES('$name');
sql;
echo $sql;
if ($base->exec($sql) == 0) {
    echo "<h1>Error</h1>";
    die();
}
else {
    echo "success";
}

?>
<a href="ej01.php">volver atrás</a>