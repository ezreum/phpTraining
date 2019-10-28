<?php
include_once 'info.php';

$aguja = isset($_GET['comunidad'])?$_GET['comunidad']:'';

echo implode('&', $comunidades[$aguja]);

?>