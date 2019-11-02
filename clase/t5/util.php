<?php

function conectarDB(
    $usu = 'root',
    $pwd = '',
    $schema = 'test',
    $host = 'localhost'
        ){
            try {
                $dsn = "mysql:host=$host;dbame=$schema";
                $db = new PDO($dsn,$usu,$pwd);
            } catch (Exception $e) {
                print ("error de conexión a $schema");
                die();
            }
            return $db;
}

function insertarNombre($nombre) {
    ;
}

function crearTablas($lista){
    foreach ($lista as $nombre){
        
    }
}


?>