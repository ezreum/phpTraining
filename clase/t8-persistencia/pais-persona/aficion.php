<?php
require_once '../rb.php';
require_once '../util.php';
?>

<h1>Lista de Aficiones</h1>

<?php 
prepRB();  
$aficiones=R::findAll('aficion');
?>

<table border="1">
<tr><th>id</th><th>nombre</th></tr>
<?php foreach ($aficiones as $aficion):?>
<tr>
<td><?= $aficion->id?></td><td><?=$aficion->nombre?></td>
</tr>
<?php endforeach;?>
</table>


<a href="aficionGet.php"><button>Crear afición</button></a>
<a href="menuPrincipal.php"><button>Volver</button></a>