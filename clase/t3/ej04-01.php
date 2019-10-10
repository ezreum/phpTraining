<?php
$nombre = isset($_GET['ncookie'])?$_GET['ncookie']:'no hay nada';
$contenido = isset($_GET['ncontent'])?$_GET['ncontent']:'no hay nada';
$conectado = isset($_GET['conexion'])?'conectado':'desconectado';
if (!isset($_COOKIE["$nombre"])) {
setcookie($nombre,$contenido);
setcookie($conectado,1);
echo "Al menos ando aquí!";
}
elseif ($_COOKIE['$conectado'] == 'desconectado') {
    echo "<p>Adiós <strong>{$_COOKIE['nv'][0]}</strong>. Usted no está conectado</p>";
    echo "<form action=\"ej04.php\">";
    echo "<label>Usuario</label>";
    echo "<input type=\"text\" name=\"ncookie\"/></br>";
    echo "<label>Clave</label>";
    echo "<input type=\"password\" name=\"ncontent\"/></br>";
    echo "<input type=\"hidden\" name=\"conexion\"/></br>";
    echo "<input type=\"submit\" value=\"Autenticar\"/>";
    echo "</form>";
}
else {
    $cont = $_COOKIE["$conectado"]+1;
    setcookie($conectado,$cont);
    echo "<p>Conectado como <strong>".$nombre."</strong>. Número de visitas: $cont</p>";
    echo "<form action=\"\">";
    echo "<input type=\"submit\" value=\"Desconectar\"/></br>";
    echo "<input type=\"image\" src=\"banderas/es.png\" alt=\"banderaEs\"/>";
    echo "<input type=\"image\" src=\"banderas/gb.png\" alt=\"banderaGb\"/>";
    echo "<input type=\"image\" src=\"banderas/fr.png\" alt=\"banderaFr\"/>";
    $_COOKIE["$conectado"]="desconectado";
    echo "</form>";
}
?>
<form action="ej04.php">
<input type="submit" value="volver"/>
</form>