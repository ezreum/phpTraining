<?php
session_start();
$a = session_name()." a".PHP_EOL;
echo session_id().php_eol;
echo $a;
if (isset($_SESSION['user'])) {
    $cont = $_COOKIE['vueltas']+1;
    setcookie('vueltas', $cont);
    $nombre = $_SESSION['user'];
    $contenido=<<<HTML
<p>conectado como <strong> $nombre</strong>. Número de visitas $cont</p>
<form action=ej04-03sess.php>
<input type="submit" value="desconectado"/>
<input type="image" src="banderas/es.png" alt="banderaEs" height=18 width=27/>
<input type="radio" name="bandera" value="es" />
<input type="image" src="banderas/gb.png" alt="banderaGb" height=18 width=27/>
<input type="radio" name="bandera" value="gb" checked/>
<input type="image" src="banderas/fr.png" alt="banderaFr" height=18 width=27/>
<input type="radio" name="bandera" value="fr"/>
</form>
HTML;
    echo $contenido;
}
else {
    header('Location:ej04-sesserror.php');
}

?>