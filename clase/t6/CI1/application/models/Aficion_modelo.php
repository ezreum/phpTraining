<?php

class Aficion_modelo extends CI_Model{
    public function getAficiones() {
        $aficiones = R::findAll('aficion');
        return $aficiones;
    }
    
    public function deleteAficion($id) {
        $aficion = R::load('aficion', $id);
        R::trash($aficion);
    }
}
?>