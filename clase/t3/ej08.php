<?php
mb_internal_encoding("UTF-8");
$html=<<<HTML
<h1>Bienvenido. Para empezar a jugar introduce una letra</h1>
<label for="letra">Introduce una letra</label>
<input id="letra" type="text" name="texto"/>
HTML;
echo $html;
?>