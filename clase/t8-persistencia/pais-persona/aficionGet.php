<?php
require_once '../util.php';


?>

<form action="aficionPost.php" method="post">
<!--  pintCheck("checkbox",["futbol","baloncesto","esquí","taekwondo","pelotamano"], "aficiones"); -->
<label>Nombre de la afición</label>
<input name="nombre" type="text"/>
<hr/>
<input type="submit" value="añadir afición">

</form>