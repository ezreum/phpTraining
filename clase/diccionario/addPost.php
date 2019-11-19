<?php 
session_start();
$es = isset($_POST['es'])?$_POST['es']:null;
$en = isset($_POST['en'])?$_POST['en']:null;
$fr = isset($_POST['fr'])?$_POST['fr']:null;

if (($_POST['es']!=null)&&($_POST['en']!=null)&&($_POST['fr']!=null)) {
    if (!isset($_SESSION['diccionario']['temporal'])) {
        $_SESSION['diccionario']['temporal']=[];
    }
    $_SESSION['diccionario']['temporal'][]=['es'=>$es,'en'=>$en,'fr'=>$fr];
    header('Location:add.php');
}


if (isset($_POST['volcar'])) {
    if (!isset($_SESSION['diccionario']['permanente'])) {
        $_SESSION['diccionario']['permanente']=[];
    }
    foreach ($_SESSION['diccionario']['temporal'] as $entrada) {
        $_SESSION['diccionario']['permanente'][]=$entrada;
    }
    unset($_SESSION['diccionario']['temporal']);
    header('Location:add.php');
}
?>