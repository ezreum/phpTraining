<?php
class Country_model extends CI_Model {
    function init($path) {
        $file=fopen($path, "r");
        while (!feof($file)){
            $line=fgets($file);
            $country=$line;
            if ($country!=0) {
                $this->create($country);
            }
                
            }
        fclose($file);
    }
    
    function getAll() {
        $c= R::findAll('country');
        return $c;
    }
    
    function create($name) {
        $country=R::dispense('country');
        $country->name=$name;
        R::store($country);
    }
    
    function update($id, $name) {
        $country=R::load('country',$id);
        $country->name=$name;
        R::store($country);
    }
    
    function trash($id) {
        $country=R::load('country',$id);
        $country->name=$nombre;
        R::trash($country);
    }
    
}





?>