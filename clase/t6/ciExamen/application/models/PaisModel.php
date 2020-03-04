<?php

class PaisModel extends CI_Model{
    
    public function getPaises() {
        $paises = R::findAll('pais');
        return $paises;
    }
    
    public function crearPais($nombre) {
        
        $pais = R::findOne('pais','nombre=?',[$nombre]);
        
        if ( $nombre != '' && $pais== null ) {
            
            $pais = R::dispense('pais');
            $pais->nombre=$nombre;
            R::store($pais);
            
        }
       // else{ //throw Exception("Pais vacío o duplicado");}
    }
    
}