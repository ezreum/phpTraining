<?php
$canciones=["Let it be","Meditarraneo","Close to the edge","Bohemian rhapsody"];
$pelicula=["Titanic","Crepusculo","Los juegos del hambre"];

if (isset($_GET['peli'])) {
    $num = rand(0,2);
    echo $pelicula[$num];
}

if (isset($_GET['cancion'])) {
    $num = rand(0,3);
    echo $canciones[$num];
}

?>