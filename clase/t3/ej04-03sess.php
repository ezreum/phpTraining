<?php
session_start();
session_destroy();
if (isset($_SESSION['user'])) {
    $activo = $_SESSION['user'];
    $message = <<<HTML
    <p>Adios <strong>$activo</strong>. Usted no está conectado</p>
<form action=ej04-01sess.php method="POST">
<label>Ususario</label>
<input type="text" name="ncookie"/><br/>
<label>Clave</label>
<input type="password" name="ncontent"/><br/>
<input type="submit" value="Autenticar">
</form>
HTML;
    echo $message;
} else {
    header('Location:ej04-sesserror.php');
}
?>