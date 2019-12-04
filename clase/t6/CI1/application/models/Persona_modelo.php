<?php

class Persona_modelo extends CI_Model{
    public function getPersonas() {
        
        $personas = R::findAll('persona');
        return $personas;
    }
}
?>