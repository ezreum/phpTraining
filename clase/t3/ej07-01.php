<?php
session_start();
$_SESSION['nombre']=isset($_GET['nombre'])?$_GET['nombre']:'';
$_SESSION['apellidos']=isset($_GET['apellidos'])?$_GET['apellidos']:'';
$_SESSION['fdnacimiento']=isset($_GET['fdnacimiento'])?$_GET['fdnacimiento']:'';
$_SESSION['genero']=isset($_GET['genero'])?$_GET['genero']:'';
$_SESSION['casado']=isset($_GET['casado'])?$_GET['casado']:'';
$_SESSION['hijos']=isset($_GET['hijos'])?$_GET['hijos']:'';
$_SESSION['nacionalidades']=isset($_GET['nacionalidades'])?$_GET['nacionalidades']:'';

$departamento=isset($_GET['departamento'])?$_GET['departamento']:'';
$salario=isset($_GET['salario'])?$_GET['salario']:'';
$comentario=isset($_GET['comentarios'])?$_GET['comentarios']:'';

$html=<<<HTML
<html>
    <head>
        <title>2do form</title>
    </head>
    <body>
            <form action ="ej07-02.php">
            <a href="ej07.php"><img style="filter: grayscale(1.0);" type="image" src="iconos/number-1-icon.png" height="50" weight="50"value=/></a>
            <input type="image" src="iconos/Number-2-icon.png" height="50" weight="50"/>
            <input style="filter: grayscale(1.0);" type="image" src="iconos/number-3-icon.png" height="50" weight="50"/>
            <input type="image" src="iconos/checkered-flag-icon.png" height="50" weight="50"/>
            <fieldset>
                <legend>Datos Profesionales</legend>
                <label for="departamento">Departamento</label>
                <select id="departamento" name="departamento">
                <option value="marketing">Marketing</option>
                <option value="it">IT</option>
                <option value="diseño">Diseño</option>
                <option value="jefe">Jefe</option>
                </select>
                <br/>
                <label for="salario">salario</label>
                <input id="salario" type="text" name="salario" value=$salario/>
                <br/>
                <label for="comentarios">comentarios</label>
                <textarea name="comentarios" cols="50" rows="10">$comentario</textarea>
                <br/>
                <input type="submit" value="grabar informacion e ir al paso 3 - Datos bancarios"/>
            </fieldset>
        </form>
    </body>
</html>
HTML;
echo $html;
?>