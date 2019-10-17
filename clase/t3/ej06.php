<?php
session_start();

$_SESSION['entero']=1;
$real=sqrt(8);
$_SESSION['real']=$real;
$_SESSION['texto']="La mejor cadena escrita nunca";
$fecha;
/*try {
    $fecha=date_create(2111-01-30);
} catch (Exception $e) {
   echo $e->getMessage();
}*/
$fecha=date_create('2111-01-30');
echo $fecha -> format('d/m/Y');
$_SESSION['fecha']=$fecha-> format('d/m/Y');
$semaforo=[
    'r'=>"rojo",
    'a'=>"amarillo",
    'v'=>"verde"
];
$_SESSION['arraysito']=$semaforo;
require_once 'punto.php';
$punto= new point;
$punto->x=1;
$punto->y=5;
var_dump($punto);
$_SESSION['puntico']=$punto;
?>
<form action="ej06-01.php">
dale para ver magia
<input type="submit" value="magia"/>
</form>



