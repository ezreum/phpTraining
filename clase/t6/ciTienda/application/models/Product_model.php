<?php
class Product_model extends CI_Model {
    function getProducts() {
        $list = R::findAll('products');
        return $list;
    }
    
    function create($name,$price) {
        if ($name!=null && $price!=null) {
            $product = R::dispense('product');
            $product->name=$name;
            $product->price=$price;
            R::store($product);
        }
        else {
            $e= ($name==null?new Exception('nulo'):new Exception('duplicate'));
            throw $e;
        }
    }
    
}


?>