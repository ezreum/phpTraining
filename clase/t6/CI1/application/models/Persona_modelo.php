<?php

class Persona_modelo extends CI_Model{
    public function getPersonas() {
        
        $personas = R::findAll('persona');
        return $personas;
    }
    public function crearPersona($nombre,$idPaisNace, $idPaisReside, $gustos, $odios){
        $ok = ($nombre!=null && $idPaisNace!=null && $idPaisReside!=null);
        if ($ok){
            $p = R::dispense('persona');
            $p -> nombre = $nombre;
            $pais = R::findOne('pais','id=?',[$idPaisNace]);
            $p -> nace = $pais;
            $pais = R::findOne('pais','id=?',[$idPaisReside]);
            $p -> reside = $pais;
            R::store($p);
         
            //To-Do Aficiones bean!
             foreach ($gustos as $gusto){
                $g= R::dispense('gusto');
                $a=R::findOne('aficion', 'id=?',$gusto);
                $g -> persona = $p;
                $g -> aficion = $a;
                R::store($g);
            } 
        }
    }
    
    public  function getPersona($id) {
        $p = R::load('persona', $id);
        return $p;
    }
    
    public function update($id, $idAnt, $nombre, $paisN, $paisR, $gustos, $odios) {
        ;
        
    }
    
}
?>