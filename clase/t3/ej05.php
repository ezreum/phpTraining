<?php
session_start();
echo "este es tu id ".session_id()."\n";
print_r($_SESSION);
if(!isset($_SESSION['cuenta'])){
    $html=<<<HTML
<h1>esta es tu primera ejecución de la página, enjoy!</h1>
HTML;
    echo $html;
    $_SESSION['cuenta']=1;}
?>
<form action=ej05-01.php>
<input type="submit" value="dale"/>
</form>
