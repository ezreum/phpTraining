<?php
function conectarMySQL (
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

$db = conectarMySQL();
echo "<h1>todo en marcha</h1>";

?>