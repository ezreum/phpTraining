<?php

class Aficion_modelo extends CI_Model{
    public function getAficiones() {
        
        $personas = R::findAll('aficion');
        return $personas;
    }
}
?>