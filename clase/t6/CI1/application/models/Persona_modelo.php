<?php

class Persona_modelo extends CI_Model{
    public function getPersonas() {
        
        $personas = R::findAll('persona');
        return $personas;
    }
    public function crearPersona($nombre,$idPaisNace, $idPaisReside){
        $ok = ($nombre!=null && $idPaisNace!=null && $idPaisReside!=null);
        if ($ok){
            $p = R::dispense('persona');
            $p -> nombre = $nombre;
            $pais = R::findOne('pais','id=?',[$idPaisNace]);
            $p -> nace = $pais;
            $pais = R::findOne('pais','id=?',[$idPaisReside]);
            $p -> reside = $pais;
        }
    }
}
?>