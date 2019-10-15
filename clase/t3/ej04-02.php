<?php
if (isset($_COOKIE['user'])) {
    //echo $_COOKIE['user'];
    $user = explode("%", $_COOKIE['user']);
    $usuario=$user[0];
    $contador = $user[1]+1;
    //$contenido = "";
    //$contenido = $usuario."%".$contador;
    $contenido = $usuario."%".$contador;
    //$contenido = $usuario."%".($user[1]+1);
    /*echo "<pre>";
    print_r($user);
    print_r($contenido);
    echo "</pre>";*/
    //print_r($usuario);
    //print_r($contador);
    //setcookie('user',($usuario."%".$contador));
    setcookie('user', $contenido);
   // echo $contador;
    $html=<<<HTML
<p>conectado como <strong> $usuario</strong>. Número de visitas $contador</p>
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
    echo $html;
}
else {
    header('Location:ej04-error.php');
}

?>