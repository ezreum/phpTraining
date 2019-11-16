<?php
$idioma = isset($_GET['idioma'])?$_GET['idioma']:'';
$bd=[
    'es' => ['usuario','contraseña','enviar'],
    'gb' => ['user','password','sent']
];
echo implode("·", $bd[$idioma]);
?>