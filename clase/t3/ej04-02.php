<?php
if (isset($_COOKIE['user'])) {
    $cont = $_COOKIE['vueltas']+1;
    setcookie('vueltas', $cont);
    $nombre = $_COOKIE['user'];
    $contenido=<<<HTML
<p>conectado como <strong> $nombre</strong>. Número de visitas $cont</p>
<form action=ej04-03.php>
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
    header('Location:ej04-error.php');
}

?>