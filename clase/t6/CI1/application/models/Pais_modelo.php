<?php

class Pais_modelo extends CI_Model{
    public function getPaises() {
        
        $personas = R::findAll('pais');
        return $personas;
    }
    
    public function crearPais() {
        $pais=R::dispense('pais');
        $pais->nombre = $nombre;
        R::store($pais);
    }
}
?>