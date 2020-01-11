<?php

class Pais_model extends CI_Model{
    
    public function getPaises() {
        $personas = R::findAll('pais');
        return $personas;
    }
    
    public function getCountry($id) {
        $pais = R::load('pais', $id);
        return $pais;
    }
    
    public function crearPais($nombre) {
        $ok = true;
        $pais = R::findOne('pais','nombre=?',[$nombre]);
        $ok = ($pais==null&&$pais!='');
        if ($ok){
            $pais=R::dispense('pais');
            $pais->nombre = $nombre;
            R::store($pais);
        }
        else {
           $e=$nombre==null?new Exception('nulo'):new Exception('duplicado');
           throw $e;
        }
    }
    
    public function update($info){
        $paisO = R::findOne('pais', 'nombre=?', [$info[1]]);
        if ($paisO->id == '0') {
            $paisN =R::dispense('pais');
            $paisN->id=$info[0];
            $paisN->nombre=$info[1];
            R::store($paisN);
        }
        else {
            $e=($paisN->nombre==null?new Exception('nulo'):new Exception('duplicado'));
            throw $e;
        }
    }
    
    public function deleteCountry($id) {
        $pais = R::load('pais', $id);
        R::trash($pais);
    }
    
}
?>