<?php
require_once '../rb.php';
require_once '../../t5/util.php';

prepRB();

$r=R::findAll('persona');


if ($r!=null) :
?>

<h1>Lista de personas</h1>
<table border="1">
	<tr><th>nombre</th></tr>
	<?php foreach ($r as $persona):?>
	<tr>
		<td><?= $persona['nombre'] ?></td>
	</tr>
	<?php endforeach;?>
</table>
<?php endif;?>