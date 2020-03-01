<?php
function highlightText($text) {
    $html=<<<html
    <h1>$text</h1>
html;
    return $html;
}



function pintarRadio($name, $arrayValueLabel, $selected='none') {
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

function pintarCheckbox($name, $arrayValueLabel, $selected) {
    $html="";
    foreach ($arrayValueLabel as $key => $value){
        if (in_array($value, $selected)) {
            $html.=<<<html
        <label>$value</label>
        <input type="checkbox" name=$name"[]" value="$value" checked="checked"/>
html;
        }
        else {
            $html.=<<<html
        <label>$value</label>
        <input type="checkbox" name=$name"[]" value="$value"/>
html;
        }
    }
    return $html;
}

function pintarSelect($name, $arrayValueLabel, $selected) {
    $html="";
    $html.="<label>$name</label>";
    $html.=<<<html
    <select name=$name"[]" multiple>
html;
    foreach ($arrayValueLabel as $key => $value){
        if ($value == $selected) {
            $html.=<<<html
        <option value="$value" selected="selected">$value</option>
html;
        }
        else {
            $html.=<<<html
        <option value="$value">$value</option>
html;
        }
    }
    $html.="</select>";
    return $html;
}


?>