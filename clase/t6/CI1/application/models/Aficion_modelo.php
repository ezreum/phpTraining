<?php

class Aficion_modelo extends CI_Model{
    public function getAficiones() {
        $aficiones = R::findAll('aficion');
        return $aficiones;
    }
}
?>