<?php
session_start();
$name = isset($_POST['name']) ? $_POST['name'] : '';
$pwd = isset($_POST['pwd']) ? $_POST['pwd'] : '';
$check = isset($_POST['recordar']) ? true : false;

$name != '' ? $_SESSION['_activo'] = $name : $_SESSION['_activo'] = '';
$check == true ? $_SESSION['_recordar'] = "checked=\"checked\"" : $_SESSION[_recordar] = '';

?>
<a href="login.php">Login</a>