<?php
session_start();
$bd=[
    'usuarios' => [
        'pepe' => '1234',
        'Juan' => 'machu',
        'macu' => 'pichu'
    ]
];


$name=isset($_POST['name'])?$_POST['name']:'';
$pwd=isset($_POST['pwd'])?$_POST['pwd']:'';

$bo=false;

foreach ($bd['usuarios'] as $usuario => $contra){
    $bo= ($name==$usuario) && ($pwd == $contra) ? true:false;
}

if ($bo) {
    $_SESSION['actual']=$name;
    header('Location:jugar.php');
} else{
    header('Location:errorLogin.php');
}

?>

