<?php
$sintomas=['aumento de peso', 'cansancio', 'confusión', 'convulsiones', 'debilidad', 'depresión','diarrea', 'dificultad para respirar', 'distensión abdominal',
    'dolor abdominal', 'dolor al orinar','dolor de cabeza', 'dolor en las articulaciones', 'erupciones', 'escalofríos', 'estreñimiento','fatiga','fiebre',
    'ictericia', 'inflamación de los ganglios linfáticos', 'irritabilidad', 'mareos','náuseas', 'pérdida de memoria','pérdida de peso', 'pérdida del apetito', 'tos', 'visión borrosa','vómitos'];

$sitio = fopen('sintomas.csv', 'a+');
fputcsv($sitio, ['Sintomas'], ',');

foreach ($sintomas as $sintoma) {
    fputcsv($sitio, [$sintoma], ',');
}
        
        
       

fclose($sitio);
?>