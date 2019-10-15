<?php
$bd=[
    ['usuario' => "antonio",
        'password' => "an"],
    ['usuario' => "ana",
        'password' => "an"],
    ['usuario' => "pepe",
        'password' => "pe"],
    ['usuario' => "marisa",
        'password' => "ma"]
];
$nombre = isset($_POST['ncookie'])?$_POST['ncookie']:null;
$content = isset($_POST['ncontent'])?$_POST['ncontent']:null;
function validate($name,$pwd) {
    $bo=false;
    global $bd;
    foreach ($bd as $usuario) {
        $bo = ($name == $usuario['usuario']) && ($pwd == $usuario['password']) ?true:$bo;
    }
    return $bo;
}
if (($nombre != null) && ($content != null) && (validate($nombre,$content)==true)){
    $user=$nombre."%"."0";
    setcookie('user', $user);
   header('Location:ej04-02.php');
} else {
    header('Location:ej04-error.php');
}
?>