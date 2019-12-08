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
           $e=($nombre==null?new Exception('nulo'):new Exception('duplicado'));
           throw $e;
        }
    }
    
    public function getCountry($id) {
        $pais = R::load('pais', $id);
        return $pais;
    }
    
    public function update($info){
        $paisO = R::load('pais', $info[2]);
        $paisN =R::dispense('pais');
        $paisN->id=$info[0];
        $paisN->nombre=$info[1];
        if ($paisN->nombre !== $paisO->nombre && $paisN->nombre != null) {
            $paisO-> id = $paisN->id;
            $paisO-> nombre = $paisN->nombre;
            R::store($paisO);
        }
        else {
            $e=($paisN->nombre==null?new Exception('nulo'):new Exception('duplicado'));
            throw $e;
        }
    }
    
}
?>