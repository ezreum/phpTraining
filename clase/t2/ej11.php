<?php
require_once 'utiles/utilHTML.php';
?>
<form action="ej11.php">
<?php echo pintarRadio("bendingChoices", ["A"=>"waterbending","B"=>"firebending"], "B");?>
<br/>
<input type="submit" value="Be a bender!">
</form>