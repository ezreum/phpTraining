<?php
$idioma = isset($_GET['idioma'])?$_GET['idioma']:'';
$bd=[
    'es' => ['introduce un número(1-10)', 'Jugar','Atrás','Mi número', 
        'número maquina', 'Tú número es mayor', 'los números son iguales',
        'Tu número es menor'
    ],
    'gb' => ['introduce a number(1-10)','play', 'back','My number', 'Machine number',
        'Your number is higher', 'the numbers are equal','your number was lower'
    ]
    
];
$envio= implode("·", $bd[$idioma]);
echo $envio;

?>