<?php
session_start();
$remitente= isset($_POST['de'])?$_POST['de']:'';
$receptor = isset($_POST['para'])?$_POST['para']:'';
$texto = isset($_POST['texto'])?$_POST['texto']:'';

//print_r($_SESSION['usuarios'][$_SESSION[$remitente]]);

$date = new DateTime(date("Y-m-d h:i:s"));
$formattedDate = $date->format('d-m-Y h:i:s');
if (($receptor!='')&&($texto!='')) {
    $infoArray=[
        ['remitente' => $remitente,
        'fecha' => $formattedDate,
        'texto' => $texto]
        ];

    if(!is_array($_SESSION['usuarios'][$receptor]['mensajes'][$remitente])){
        $_SESSION['usuarios'][$receptor]['mensajes'][$remitente] = [];
        array_push($_SESSION['usuarios'][$receptor]['mensajes'][$remitente], $infoArray);
        echo "Mensaje enviado, le redirigimos a su bandeja de entrada"; 
        header('refresh:3;url=listaUsuarios.php');
    }
    else {
        array_push($_SESSION['usuarios'][$receptor]['mensajes'][$remitente], $infoArray);
        echo "Mensaje enviado, le redirigimos a su bandeja de entrada";
        header('refresh:3;url=listaUsuarios.php');
    }
}
else {
    echo "hubo un error, le redirigimos a su bandeja de entrada";
    header('refresh:3;url=listaUsuarios.php');
}
?>