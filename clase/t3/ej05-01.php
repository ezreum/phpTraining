<?php
session_start();
echo session_status();
if(!isset($_SESSION['cuenta'])){
  $html=<<<HTML
<h1>esta es tu primera ejecución de la página, enjoy!</h1>
HTML;
  $_SESSION['cuenta']=1;
} else if(isset($_SESSION['cuenta'])){
    $contador=$_SESSION['cuenta'];
    $html=<<<HTML
<h1>esta es tu ejecución número $contador</h1>
HTML;
    $contador++;
    $_SESSION['cuenta']=$contador;
  }
  else {
      echo "Something went wrong";
  }
?>
<form action=ej05-01.php>
<input type="submit" value="dale"/>
</form>
<form action=ej05-02.php>
<input type="hidden" name="destroy"/>
<input type="submit" value="destruye la sesion"/>
</form>