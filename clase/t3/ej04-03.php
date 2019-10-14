<?php
if (isset($_COOKIE['user'])) {
    $name = $_COOKIE['user'];
    $message =<<<HTML
    <p>Adios <strong>$name</strong>. Usted no está conectado</p>
<form action=ej04-01.php method="POST">
<label>Ususario</label>
<input type="text" name="ncookie"/><br/>
<label>Clave</label>
<input type="password" name="ncontent"/><br/>
<input type="submit" value="Autenticar">
</form>
HTML;
    echo $message;
}
else {
    header('Location:ej04-error.php');
}
?>