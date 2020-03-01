<?php
function highlightText($text) {
    $html=<<<html
    <h1>$text</h1>
html;
    return $html;
}



function pintarRadio($name, $arrayValueLabel, $selected) {
    $html="";
    foreach ($arrayValueLabel as $key => $value){
        if ($selected == $key) {
            $html.=<<<html
        <label>$value</label>
        <input type="radio" name="$name" value="$value" checked="checked"/>
html;
        }
        else {
            $html.=<<<html
        <label>$value</label>
        <input type="radio" name="$name" value="$value"/>
html;
        } 
    }
        return $html;
}
?>