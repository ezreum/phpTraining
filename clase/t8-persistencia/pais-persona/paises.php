<?php require_once '../rb.php';
require_once '../util.php';?>
<h1>Lista de Paises</h1>

<?php 
prepRB();  
$paises=R::findAll('pais');
?>

<table>
  <tr>
    <th>nombre</th>
  </tr>
  <?php foreach ($paises as $pais):?>
  <tr>
    <td><?= $pais->nombre ?></td>
    <td><form action="eliminarPais.php" method="POST">
    <input type="hidden" name = "pais" value="<?= $pais->id ?>"/>
	<button type="submit"><img src="trash.png" alt="eliminar" width="50px" height="50px"></button>
	 </form></td>
  </tr>
  <?php endforeach;?>
</table>

<a href="paisesGet.php"><button>crear pais</button></a>







