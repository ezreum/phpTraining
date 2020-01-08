<?php
class Rol_model extends CI_Model{
    public function init() {
        $roles=['guest','authenticated','admin'];
        foreach($roles as $papel){
            $rol = R::dispense('rol');
            $rol->nombre = $papel;
            R::store($rol);
        }
    }

}
?>