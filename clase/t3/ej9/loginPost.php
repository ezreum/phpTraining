<?php
session_start();
$name = isset($_POST['name'])?$_POST['name']:'';
$pwd = isset($_POST['pwd'])?$_POST['pwd']:'';
$check = isset($_POST['recordar'])?"checked":'';

echo $check;

    $_SESSION['name']=$name;
    $_SESSION['recordar']=$check;

?>
<a href="login.php">Login</a>