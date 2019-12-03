<?php
require_once '../util.php';


?>

<form action="aficionPost.php" method="post">
<?= pintCheck("checkbox",["futbol","baloncesto","esquí","taekwondo","pelotamano"], "aficiones");?>


<hr/>
<input type="submit" value="añadir afición">

</form>