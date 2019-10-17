<?php
echo "Escribe el nombre de la carpeta a crear";
fscanf(STDIN,'%s',$nombre);
echo $nombre;
if (!is_dir($nombre)){
    echo "escribe la ruta de las imágenes a copiar con / al final";
    fscanf(STDIN,'%s',$ruta);
    echo "ahora escribe el nombre de la 1era imagen";
    fscanf(STDIN,'%s', $im1);
    echo "ahora escribe el nombre de la 2da imagen";
    fscanf(STDIN,'%s',$im2);
    echo "ahora escribe el nombre de la 3da imagen";
    fscanf(STDIN,'%s',$im3);
    echo "ahora escribe el nombre de la 4ta imagen";
    fscanf(STDIN,'%s',$im4);
    if ((!file_exists($im1))&&(!file_exists($im2))&&(!file_exists($im3))&&(!file_exists($im4))) {
    mkdir($nombre);
    $im11 = $ruta.$im1;
    $im22 = $ruta.$im2;
    $im33 = $ruta.$im3;
    $im44 = $ruta.$im4;
    copy($im11, $nombre."/".$im1);
    copy($im22, $nombre."/".$im2);
    copy($im33, $nombre."/".$im3);
    copy($im44, $nombre."/".$im4);
    }
}
?>