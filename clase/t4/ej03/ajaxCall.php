<?php
$idioma = isset($_GET['idioma'])?$_GET['idioma']:'';
$bd=[
    'es' => ['palabra', 'traducción', 'enviar'
    ],
    'gb' => ['word','translation','sent'
    ],
    'fr' => ['mot','traduction','envoyer'
    ]    
    
];
$envio= implode("·", $bd[$idioma]);
echo $envio;

?>