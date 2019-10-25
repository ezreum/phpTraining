<?php
session_start();

$html = <<<HTML
<form action="registroPost.php" method="POST">
<h2>Introduce las credenciales del nuevo usuario</h2>
<br/>
<label>Nombre</label>
<input type="text" name="nombre"/>
<br/>
<label>Contraseña</label>
<input type="password" name="pwd"/>
<br/>
<input type="submit" value="registrar"/>
<form>
HTML;
echo $html;

    echo "<h2>escribe un usuario y contraseña nueva</h2>";
    echo <<<html
    <a href="login.php">Vuelta al login</a>
html;

?>