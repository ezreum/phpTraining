<?php
 function conectarMySQL (
        $schema = 'test',  
        $usu = 'ruben',
        $pwd = '1234',
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

$db = conectarMySQL();
echo "<h1>todo en marcha</h1>";
?>