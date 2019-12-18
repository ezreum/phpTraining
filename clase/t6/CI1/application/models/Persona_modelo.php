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
         
             foreach ($gustos as $gusto){
                $g= R::dispense('gusto');
                $a=R::load('aficion', $gusto);
                $g -> persona = $p;
                $g -> aficion = $a;
                R::store($g);
            } 
            foreach ($odios as $odio){
                $o= R::dispense('odio');
                $a=R::load('aficion',$odio);
                $o -> persona = $p;
                $o -> aficion = $a;
                R::store($o);
            } 
        }
    }
    
    public function signUp($nombre,$idPaisNace, $idPaisReside){
        $ok = ($nombre!=null && $idPaisNace!=null && $idPaisReside!=null);
        if ($ok){
            $p = R::dispense('persona');
            $p -> nombre = $nombre;
            $pais = R::findOne('pais','id=?',[$idPaisNace]);
            $p -> nace = $pais;
            $pais = R::findOne('pais','id=?',[$idPaisReside]);
            $p -> reside = $pais;
            R::store($p);
            
        }
    }
    
    public  function getPersona($id) {
        $p = R::load('persona', $id);
        return $p;
    }
    
    public function update($id, $nombre, $paisN, $paisR, $gustos, $odios) {
        $ok = ($nombre!=null && $paisN!=null && $paisR!=null);
        if ($ok){
         $p = R::load('persona', $id);
         $p->nombre=$nombre;
         $p->nace=$paisN;
         $p->reside=$paisR;
         
        }
    }
    
    public function delete($id) {
        $d = R::load('persona', $id);
        R::trash($d);
    }
    
    
}
?>