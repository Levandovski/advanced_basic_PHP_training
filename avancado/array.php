<?php

$contaCorrentes = [
    '123.321.234-59' => [
        'titular' => 'Maria',
        'saldo' => 1000
    ],
    '124.321.234-59' => [
        'titular' => 'José',
        'saldo' => 1300
    ],
    '125.321.234-59' => [
        'titular' => 'Carlos',
        'saldo' => 5000
    ]
];

foreach($contaCorrentes as $cpf => $data){
    
    echo $cpf.' - > '.$data['titular'].PHP_EOL;

}