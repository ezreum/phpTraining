<?php

class AficionModel extends CI_Model{
    
    public function getAficiones() {
        $aficiones = R::findAll('aficion');
        return $aficiones;
    }
    
    
    public function create($nombre) {
        $aficion = R::dispense('aficion');
        $aficion -> nombre = $nombre;
        R::store($aficion);
    }
    
}