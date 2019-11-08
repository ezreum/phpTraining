<?php
 function conectarMySQL (
        $schema = 'test',  
        $usu = 'root',
        $pwd = '1',
        $host = 'localhost'
    ){
        try {
            $dsn = "mysql:host=$host;dbname=$schema";
            $db = new PDO($dsn,$usu,$pwd);
        } catch (Exception $e) {
            print ("error de conexión a $schema");
            die();
        }
      return $db;
}

$base = conectarMySQL();
echo "<h1>todo en marcha ya</h1>";

$query = <<<sql
INSERT INTO TRABAJADORES(NOMBRE) VALUES('$name');
sql;

if($base->exec($query)==0){
    echo "<h1>Error inexperado!</h1>";
    die();}
    else {
        echo "<h1>Fila insertada</h1>";
    }
    


?>