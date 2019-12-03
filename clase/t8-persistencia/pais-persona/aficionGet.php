<?php
require_once '../util.php';


?>

<form>
<?= pintCheck("checkbox",["futbol","baloncesto","esquí","taekwondo","pelotamano"], "aficiones");?>


<hr/>
<a href="aficionPost.php"><button>crear</button></a>

</form>