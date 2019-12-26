<?php

class Persona_model extends CI_Model{
    public function getPersonas() {
        
        $personas = R::findAll('persona');
        return $personas;
    }
    
    public function getPerson($nombre) {
        $persona = R::findOne('persona', 'nick=?', [$nombre]);
        return $persona;
    }
    
    
    public function crearPersona($nombre,$idPaisNace, $idPaisReside, $gustos, $odios){
        $ok = ($nombre!=null && $idPaisNace!=null && $idPaisReside!=null);
        if ($ok){
            $p = R::dispense('persona');
            $p -> nombre = $nombre;
            $pais = R::findOne('pais','id=?',[$idPaisNace]);
            $p -> nace = $pais;
            $pais = R::findOne('pais','id=?',[$idPaisReside]);
            $p -> reside = $pais;
            R::store($p);
         
             foreach ($gustos as $gusto){
                $g= R::dispense('gusto');
                $a=R::load('aficion', $gusto);
                $g -> persona = $p;
                $g -> aficion = $a;
                R::store($g);
            } 
            foreach ($odios as $odio){
                $o= R::dispense('odio');
                $a=R::load('aficion',$odio);
                $o -> persona = $p;
                $o -> aficion = $a;
                R::store($o);
            } 
        }
    }
    
    public function signUp($nombre, $nick, $pwd, $pwdCheck, $idPaisNace, $idPaisReside){
        $ok = ($nombre!=null && $nick!=null && $pwd!=null && $pwdCheck!=null && $idPaisNace!=null && $idPaisReside!=null);
        $ok1 =  R::findOne('persona', 'nombre=?', [$nick]) ;
        $ok2 = ($pwd==$pwdCheck);
        if ($ok && $ok2 && $ok1==null){
            $p = R::dispense('persona');
            $p -> nombre = $nombre;
            $p -> nick = $nick;
            $p->pwd = password_hash($pwd, PASSWORD_DEFAULT);
            $pais = R::findOne('pais','id=?',[$idPaisNace]);
            $p -> nace = $pais;
            $pais = R::findOne('pais','id=?',[$idPaisReside]);
            $p -> reside = $pais;
            R::store($p);
            
        }
    }
    
    public function signIn($nick, $pwd){
        $ok = ($nick!=null && $pwd!=null);
        $p = R::findOne('persona', 'nombre=?', [$nick]) ;
        if ($ok && $p!=null){
           $check = $p->pwd==password_hash($pwd, PASSWORD_DEFAULT)?true:false;
        }
    }
    
    
    public  function getPersona($id) {
        $p = R::load('persona', $id);
        return $p;
    }
    
    public function update($id, $nombre, $paisN, $paisR, $gustos, $odios) {
        
        $ok = ($nombre!=null && $paisN!=null && $paisR!=null);
        if ($ok){
          $p = R::load('persona', $id);
         $p->nombre=$nombre;
         $p->nace_id=$paisN;
         $p->reside_id=$paisR;
         $comunes = [];
         
         foreach ($p->ownGustoList as $gusto){
             
              if ( !in_array($gusto->aficion->id, $gustos) ){    
                 
             R::store($p);
             R::trash($gusto);
             }
             else{
             $comunes[]=$gusto;
             }
         }
         
         foreach (array_diff($gustos, $comunes) as $gusta) {
             
             echo $gusta;
             
             $aficion = R::load('aficion', $gusta);
             $gusta = R::dispense('gusto');
             $gusta->persona = $p;
             $gusta->aficion = $aficion;
             R::store($p);
             R::store($gusta);
         }
         
         $comunes = [];
         
         foreach ($p->ownOdioList as $odio){
             
             if ( !in_array($odio->aficion->id, $odios) ){
                 
                 R::store($p);
                 R::trash($odio);
             }
             else{
                 $comunes[]=$odio;
             }
         }
         
         foreach (array_diff($odios, $comunes) as $odio) {
             
             echo $odio;
             
             $aficion = R::load('aficion', $odio);
             $odio = R::dispense('odio');
             $odio->persona = $p;
             $odio->aficion = $aficion;
             R::store($p);
             R::store($odio);
         }
         
         
        } else {
            $e = ($nombre == null ? new Exception("nulo") : new Exception("duplicado"));
            throw $e;
        }
}

    public function delete($id) {
        
        $d = R::load('persona', $id);
        R::trash($d);
    }
    
    
}
?>