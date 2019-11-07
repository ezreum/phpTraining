<?php
$figuras=["as","dos","tres","cuatro","cinco","seis","siete","sota","caballo","rey"];
$palos=["Oros","copas","espadas","bastos"];

class carta {
    public $nombre;
    public $valor;
    public $img;
    
    function __construct($nombre,$valor,$img) {
        $this->nombre=$nombre;
        $this->valor=$valor;
        $this->img=$img;
    }
}
?>