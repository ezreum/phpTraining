<?php
session_start();
$nombre=isset($_GET['nombre'])?$_GET['nombre']:'';
$apellidos=isset($_GET['apellidos'])?$_GET['apellidos']:'';
$nacimiento=isset($_GET['fdnacimiento'])?$_GET['fdnacimiento']:'';
$genero=isset($_GET['genero'])?$_GET['genero']:'';
$casado=isset($_GET['casado'])?"checked=\"checked\"":'';
$hijos=isset($_GET['hijos'])?"checked=\"checked\"":'';
$nacionalidades;
$nacionalidad=isset($_GET['nacionalidades'])?$_GET['nacionalidades']:'';
foreach ($nacionalidad as $r){
    $nacionalidades .=$r." "; 
}
$html=<<<HTML
<html>
    <head>
        <title>1er form</title>
    </head>
    <body>
            <form action ="ej07-01.php">
            <input type="image" src="iconos/number-1-icon.png" height="50" weight="50"/>
            <input style="filter: grayscale(1.0);" type="image" src="iconos/Number-2-icon.png" height="50" weight="50" />
            <input style="filter: grayscale(1.0);" type="image" src="iconos/number-3-icon.png" height="50" weight="50"/>
            <input type="image" src="iconos/checkered-flag-icon.png" height="50" weight="50"/>
            <fieldset>
                <legend>Datos Personales</legend>
                <label for="nombre">nombre</label>
                <input id="nombre" type="text" name="nombre" value="$nombre"/>                
                <label for="apellidos">Apellidos</label>
                <input id="apellidos" type="text" name="apellidos" value="$apellidos"/>
                <br/>
                <label for="fdnacimiento">fecha de nacimiento</label>
                <input id="fdnacimiento" type="date" name="fdnacimiento" value="$nacimiento"/>
                <br/>
                <label>Genero: </label>
                <label for="mujer">mujer</label>
                <input id="mujer" type="radio" name="genero" value="mujer"/>
                <label for="hombre">hombre</label>
                <input id="hombre" type="radio" name="genero" value="hombre"/>
                <label for="pelicano">pelicano</label>
                <input id="pelicano" type="radio" name="genero" value="pelicano"/>
                <br/>
                <label for="estado">Casado o pareja de hecho</label>
                <input id="estado" type="checkbox" name="casado" value="casado" $casado/>                
                <label for="hijos">Hijos</label>
                <input id="hijos" type="checkbox" name="hijos" value="hijos" $hijos/>
                <br/>
                <label for="nacionalidades">Nacionalidades</label>
                <select id="nacionalidades" name="nacionalidades[]" multiple>
                <option value="española">española</option>
                <option value="alemana">alemana</option>
                <option value="francesa">francesa</option>
                <option value="danesa">danesa</option>
                </select>
                <br/>
                <input type="submit" value="grabar informacion e ir al paso 2 - Datos profesionales"/>
            </fieldset>
        </form>
    </body>
</html>
HTML;
echo $html;
?>