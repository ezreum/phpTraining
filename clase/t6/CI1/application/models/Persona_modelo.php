<?php
require_once 'rb.php'; 
class Persona_model extends CI_Model{
    public function getPersonas() {
        
        $personas = R::findAll('persona');
        print_r($personas);
        return $personas;
    }
}
?>