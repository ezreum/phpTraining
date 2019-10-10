<?php
session_start();
$id= session_id();
echo "sesión iniciada, tu identificador es $id";
if (!isset($_SESSION['nv'])
    ) {
    $_SESSION['nv']=1;
}
else {
    $_SESSION['nv']++;
    echo "<h3>llevas {$_SESSION['nv']} visitas</h3>";
}
session_destroy();
?>