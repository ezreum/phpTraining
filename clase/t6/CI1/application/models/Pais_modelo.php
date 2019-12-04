<?php

class Pais_modelo extends CI_Model{
    public function getPaises() {
        
        $personas = R::findAll('pais');
        return $personas;
    }
    
    public function crearPais($nombre) {
        $ok = true;
        $pais = R::findOne('pais','nombre=?',[$nombre]);
        $ok = ($pais==null);
        if ($ok){
            $pais=R::dispense('pais');
            $pais->nombre = $nombre;
            R::store($pais);
        }
        else {
           throw new Exception("El pais ya existe");
        }
    }
}
?>