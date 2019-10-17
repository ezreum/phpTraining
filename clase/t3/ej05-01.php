<?php
session_start();
print_r($_SESSION);
if(isset($_SESSION['cuenta'])){
    $contador=$_SESSION['cuenta'];
    $html=<<<HTML
<h1>esta es tu ejecución número $contador</h1>
HTML;
    echo $html;
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