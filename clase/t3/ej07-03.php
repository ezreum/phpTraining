<?php
session_start();
session_destroy();
$_SESSION['cuenta']=isset($_POST['cuenta'])?$_POST['cuenta']:'';
print_r($_SESSION);
$html=<<<HTML
<html>
    <head>
        <title>3er form</title>
    </head>
    <body>
            <form>
            <input style="filter: grayscale(1.0);" type="image" src="iconos/number-1-icon.png" height="50" weight="50"/>
            <input style="filter: grayscale(1.0);" type="image" src="iconos/Number-2-icon.png" height="50" weight="50" disabled/>
            <input style="filter: grayscale(1.0);" type="image" src="iconos/number-3-icon.png" height="50" weight="50" disabled/>
            <input type="image" src="iconos/checkered-flag-icon.png" height="50" weight="50" disabled/>
            <fieldset>
            <legend>Datos Personales</legend>
            <label>Nombre: </label>
            <strong>{$_SESSION['nombre']}</strong>
            <br/>
            <label>Apellidos: </label>
            <strong>{$_SESSION['apellidos']}</strong>
            <br/>
            <label>Fecha de Nacimiento: </label>
            <strong>{$_SESSION['fdnacimiento']}</strong>
            <br/>
            <label>Nacionalidades: </label>
            <strong>{$_SESSION['nacionalidades']}</strong>
            </fieldset>
            <fieldset>
            <legend>Datos Profesionales</legend>
            <label>Departamento: </label>
            <strong>{$_SESSION['departamento']}</strong>
            <br/>
            <label>Salario: </label>
            <strong>{$_SESSION['salario']}</strong>
            <br/>
            <label>Comentarios: </label>  
            <strong>{$_SESSION['comentarios']} </strong>         
            </fieldset>
            <fieldset>
                <legend>Datos Bancarios</legend>
                <label for="cuenta">Cuenta Corriente: </label>
                <strong>{$_SESSION['cuenta']}</strong>
                
            </fieldset>
        </form>
       <a href="ej07.php">Volver al principio</a>
    </body>
</html>
HTML;
echo $html;
?>