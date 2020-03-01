<?php
require_once 'utiles/utilHTML.php';
?>

<form>

<?php echo pintarSelect("trabajadores", ["Pepe","Ana","Pablo","Pepa"], "Ana")?>
<br/>
<input type="submit" value="choose your worker!">

</form>