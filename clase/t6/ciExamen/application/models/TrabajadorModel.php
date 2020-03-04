<?php

class TrabajadorModel extends CI_Model {
    
    function getTrabajadores() {
        $trabajadores = R::findAll('trabajador');
        return $trabajadores;
    }
    
    function create($nombre, $nace, $aficiones) {
        $trabajador = R::dispense('trabajador');
        $trabajador -> nombre = $nombre;
        $pais = R::load('pais', $nace);
        $trabajador -> nace = $pais;
        
        R::store($trabajador);
        
        foreach ($aficiones as $aficionid){
            $gusto = R::dispense('gusto');
            $aficion = R::load('aficion', $aficionid);
            $gusto -> aficion = $aficion;
            $gusto -> trabajador = $trabajador;
            R::store($gusto);
        }   
    }
    
    
    public function jefe($trabajadorId, $jefeId) {
        $trabajador = R::load('trabajador', $trabajadorId);
        $jefe = R::load('trabajador', $jefeId);
        $trabajador->jefe=$jefe;
        R::store($trabajador);
    }
    
    
}