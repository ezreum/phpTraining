<?php session_start();

if (isset($_SESSION['diccionario']['permanente'])){
    
    $palabra=isset($_POST['palabra'])?$_POST['palabra']:null;
    $idioma=isset($_POST['idioma'])?$_POST['idioma']:null;
    if ($palabra!=null && $idioma!=null) {

            foreach ($_SESSION['diccionario']['permanente'] as $entrada){
             
                foreach ($entrada as $palabraIdioma) {
                    if ($palabra == $palabraIdioma) {
                        
                        if ($palabraIdioma != $entrada[$idioma]) {
                           echo $entrada[$idioma];
                        }
                        else echo"no se puede traducir";

                    }
                }
               
            }        
        
    }

}

?>