<?php

function conectarDB(
    $schema = 'test',
    $usu = 'root',
    $pwd = '',
    $host = 'localhost'
        ){
            try {
                $dsn = "mysql:host=$host;dbame=$schema";
                $db = new PDO($dsn,$usu,$pwd);
            } catch (Exception $e) {
                print ("error de conexión a $chema");
                die();
            }
            return $db;
}

function insertarNombre($nombre) {
    ;
}


?>