<?php require_once '../rb.php';
require_once '../util.php';?>
<h1>Lista de Personas</h1>

<?php 
prepRB();  
R::setAutoResolve(true); //te ahorra el fetchAs()...
$personas=R::findAll('persona');

?>

<table>
  <tr>
    <th>nombre</th>
  </tr>
  <?php foreach ($personas as $persona):?>
  <tr>
    <td><?= $persona->nombre ?></td>
    <td><?=  $persona->nace==null?'--':$persona->nace->nombre?></td>
    <td><?=  $persona->reside_id==null?'--':$persona->reside->nombre/* $persona->pais_reside->nombre */?></td>
    <td> 
    <?php foreach ($persona -> aggr ('ownGustoList','aficion') as $aficion){
    echo $aficion->nombre.'<br/>';
    }?>
    </td>
    <td> 
    <?php foreach ($persona -> aggr ('ownOdioList','aficion') as $aficion){
    echo $aficion->nombre.'<br/>';
    }?>
    </td>
    <td><form action="eliminarPersona.php" method="POST">
    <input type="hidden" name="persona" value="<?= $persona->id ?>"/>
	<button type="submit"><img src="trash.png" alt="eliminar" width="50px" height="50px"></button>
	 </form></td>
  </tr>
  <?php endforeach;?>
</table>



<a href="personasGet.php"><button>crear persona</button></a>
