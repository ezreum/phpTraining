<?php
require_once '../rb.php';
require_once '../util.php';
?>

<h1>Lista de Aficiones</h1>

<?php 
prepRB();  
$aficiones=R::findAll('aficion');

?>




<a href="aficionGet.php"><button>Crear afición</button></a>