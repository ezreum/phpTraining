<?php

class User_model extends CI_Model{
    public function getPersonas() {
        $personas = R::findAll('user');
        return $personas;
    }
    
    public function getPerson($nick) {
        $persona = R::findOne('user', 'nick=?', [$nick]);
        return $persona;
    }
    
    public  function getPersona($id) {
     $p = R::load('user', $id);
     return $p;
     }
    
    public function signUp($nombre, $nick, $extension, $pwd, $pwdCheck, $idPaisNace, $idPaisReside){
        $ok = ($nombre!=null && $nick!=null && $pwd!=null && $pwdCheck!=null && $idPaisNace!=null && $idPaisReside!=null);
        $ok1 =  R::findOne('persona', 'nombre=?', [$nick]) ;
        $ok2 = ($pwd==$pwdCheck);
        $id;
        if ($ok && $ok2 && $ok1==null){
            
            $rol=R::load('rol', 2);
            
            $p = R::dispense('user');
            $p -> nombre = $nombre;
            $p -> nick = $nick;
            $p -> extension = $extension;
            $p->pwd = password_hash($pwd, PASSWORD_DEFAULT);
            $pais = R::findOne('pais','id=?',[$idPaisNace]);
            $p -> nace = $pais;
            $pais = R::findOne('pais','id=?',[$idPaisReside]);
            $p -> reside = $pais;
            $p -> hasPriv = $rol;
            $id = R::store($p);
            
        }
        return $id;
    }
    
    public function signIn($nick, $pwd){
        $ok = ($nick!=null && $pwd!=null);
        $p = R::findOne('user', 'nick=?', [$nick]);
        $check=null;
        
        if ($ok && $p!=null){
            $check = password_verify($pwd,  $p->pwd);
        }
        else {
            $e = ($p==null||$check==false? new Exception("error en el usuario o la contraseña"):'');
            throw $e;
        }
        return $check;
    } 
    
    public function update($id, $nombre, $paisN, $paisR, $gustos, $odios) {
        
        $ok = ($nombre!=null && $paisN!=null && $paisR!=null);
        if ($ok){
            $p = $this->getPersona($id);
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
                
                $aficion = R::load('aficion', $gusta);
                $gusta = R::dispense('gusto');
                $gusta->user = $p;
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
                $odio->user = $p;
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
        $p = $this->getPersona($id);
        R::trash($p);
    }
    
    
    
    /* public function crearPersona($nombre,$idPaisNace, $idPaisReside, $gustos, $odios){
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
     } */
    
    /* public function subir() {
        $direc=__DIR__;
        $trata= explode('/', $direc);
        $direc="";
        for ($i = 0; $i < sizeof($trata); $i++) {
            $direc.=$trata[$i].'/';
            $trata[$i]=='ciHDU'?$i=sizeof($trata):'';
            
        }
        $direc.='assets/upload';
        
        
        $uploadfile = $direc . basename($_FILES['toUpload']['name']);
        if (!is_dir($direc)){
            mkdir($direc,0777, true);
            
            if (move_uploaded_file($_FILES["toUpload"]["tmp_name"], $uploadfile)) {
                $msg = "The file " . basename($_FILES["toUpload"]["name"]) . " has been uploaded.";
            }
            else{
                echo "No se subio el archivo";
            }
            
        }
        
        else {
            echo "El directorio ya existe";
            if (move_uploaded_file($_FILES["toUpload"]["tmp_name"], $uploadfile)) {
                $msg = "The file " . basename($_FILES["toUpload"]["name"]) . " has been uploaded.";
            }
            else{
                echo "No se subio el archivo";
            }
            
        }
        
        echo 'Here is some more debugging info:';
    } */
    
    
}
?>