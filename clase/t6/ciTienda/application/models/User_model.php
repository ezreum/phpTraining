<?php
class User_model extends CI_Model {
    
    function getPerson($nick) {
        $user = R::findOne('user', 'nick=?', [$nick]);
        return $user;
    }
    
    function create($name, $nick) {
        $user= R::dispense('user');
        $check = R::findOne('user', 'nick=?', [$nick]);
        if ($check==null) {
            $user->name=$name;
            $user->nick=$nick;
            $id = R::store($user);
            return $id;
        }
        else {
            $e= ($user==null?new Exception('null'):new Exception('duplicate'));
            throw $e;
        }
    }
    function createDetails($id, $pwd,$pwdCheck,$country, $extension) {
        $user= R::load('user', $id);
        
        $count= R::load('country', $country);
        $ok = ($pwd==$pwdCheck);
        
        if ($user!=null && $ok) {
            $details= R::dispense('userdetails');
            $details->pwd=password_hash($pwd, PASSWORD_DEFAULT) ;
            $details->user=$user;
            $details->country=$count;
            $details->extension=$extension;
            R::store($details);
        }
        else {
            $e= ($user==null?new Exception('null'):new Exception('duplicate'));
            throw $e;
        }
    }
    
    
    function signIn($nick, $pwd) {
        
        $user = R::findOne('user', 'nick=?', [$nick]);
        $details = R::load('userdetails', $user->id);
        if ($user!=null) {
            $check=null;
            
            if ($pwd!=null){
                $check = password_verify($pwd,  $details->pwd);
            }
            else {
                $e = ($p==null||$check==false? new Exception("mistakes in either the name or the password"):'');
                throw $e;
            }
            return $check;
        }
    }
    
    
}