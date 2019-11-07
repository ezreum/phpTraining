<?php
session_start();

$nombreTarea=isset($_POST['tarea'])?$_POST['tarea']:null;
$empleado=isset($_POST['empleado'])?$_POST['empleado']:null;

$bool=false;

if ((!isset($_SESSION[$empleado]))&&($nombreTarea!=null)) {
    $_SESSION[$empleado]=[];
    $_SESSION[$empleado][]=$nombreTarea;
    $bool=true;
}
elseif ((isset($_SESSION[$empleado]))&&($nombreTarea!=null)) {
 $_SESSION[$empleado][]=$nombreTarea;   
 $bool=true;
}
else{
    header('Location:panel.php');
}

if ($bool) :
?>

<h1>lista de tareas <?= $empleado?></h1>

<ul>
<?php foreach ($_SESSION[$empleado] as $tarea):?>

<li><?= $tarea==end($_SESSION[$empleado])?"<b>$tarea</b>":$tarea; ?></li>


<?php endforeach;?>
</ul>

<?php endif;?>

<a href="addTask.php">volver a la asignación</a>