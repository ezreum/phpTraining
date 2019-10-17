<?php
session_start();
$_SESSION['departamento']=isset($_GET['departamento'])?$_GET['departamento']:'';
$_SESSION['salario']=isset($_GET['salario'])?$_GET['salario']:'';
$_SESSION['comentarios']=isset($_GET['comentarios'])?$_GET['comentarios']:'';
$html=<<<HTML
<html>
    <head>
        <title>3er form</title>
    </head>
    <body>
            <form action ="ej07-03.php" method="POST">
            <input style="filter: grayscale(1.0);" type="image" src="iconos/number-1-icon.png" height="50" weight="50"/>
            <input style="filter: grayscale(1.0);" type="image" src="iconos/Number-2-icon.png" height="50" weight="50" disabled/>
            <input type="image" src="iconos/number-3-icon.png" height="50" weight="50" disabled/>
            <input type="image" src="iconos/checkered-flag-icon.png" height="50" weight="50" disabled/>
            <fieldset>
                <legend>Datos Bancarios</legend>
                <label for="cuenta">Cuenta Corriente</label>
                <input id="cuenta" name="cuenta" type="text" />
                <br/>
                <input type="submit" value="grabar informacion e ir al resumen final"/>
            </fieldset>
        </form>
    </body>
</html>
HTML;
echo $html;
?>