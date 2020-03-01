<?php
require_once 'utiles/utilHTML.php';
?>

<form>
<?php 
echo pintarCheckbox("bendingPowers",
    ["WaterTribe"=>"waterBending","AirNomads"=>"airBending","EarthNation"=>"earthBending","FireNation"=>"fireBending"],
    ["fireBending","earthBending"]);
?>
<br/>
<input type="submit" value="BendingSkills">
</form>