<?php require_once '../rb.php';
require_once '../util.php';?>
<h1>Lista de Personas</h1>

<?php 
prepRB();  
$personas=R::findAll('persona');
$paises=R::findAll('pais');
?>

<table>
  <tr>
    <th>nombre</th>
  </tr>
  <?php foreach ($personas as $persona):?>
  <tr>
    <td><?= $persona->nombre ?></td>
    <td><?=  $persona->pais==null?'--':$persona->paisN->nombre?></td>
    <td><?=  $persona->pais==null?'--':$persona->paisR->nombre?></td>
    <td><form action="eliminarPersona.php" method="POST">
    <input type="hidden" name="persona" value="<?= $persona->id ?>"/>
	<button type="submit"><img src="trash.png" alt="eliminar" width="50px" height="50px"></button>
	 </form></td>
  </tr>
  <?php endforeach;?>
</table>



<a href="personasGet.php"><button>crear persona</button></a>
