<?php

class Aficion_model extends CI_Model{
    public function getAficiones() {
        $aficiones = R::findAll('aficion');
        return $aficiones;
    }
    
    public function getAficion($id) {
        $aficion = R::load('aficion', $id);
        return $aficion;
    }
    
    public function create($nombre){
       $aficion = R::findOne('aficion', 'nombre=?', [$nombre]);
       $ok = ($aficion==null&&$aficion!='');
       if ($ok){
           $aficion = R::dispense('aficion');
           $aficion->nombre = $nombre;
           R::store($aficion);
       }
       else{ $e=$nombre==null?new Exception('nulo'):new Exception('duplicado');
       throw $e;
       }
    }
    
    public function update($info) {
        $aficion = R::load('aficion', $info[0]);
        $aficion->nombre = $info[1];
        R::store($aficion);
    }
    
    public function deleteAficion($id) {
        $aficion = R::load('aficion', $id);
        R::trash($aficion);
    }
}
?>