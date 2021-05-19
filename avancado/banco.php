<?php

require_once './functions/myfunctions.php';


$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],
    '123.456.689-11' => [
        'titular' => 'Alberto',
        'saldo' => 300
    ],
    '123.256.789-12' => [
        'titular' => 'Vinicius',
        'saldo' => 100
    ]
];

$saque = 500;

$depositar = 900;

foreach ($contasCorrentes as $cpf => $conta) { 
    exibirMensagem("Saldo Original: Titular:  {$conta['titular']}  /Valor:  {$conta['saldo']}");  
    $conta = depositar($conta, $depositar);
    $conta = saque($saque, $conta, $cpf);   
    $conta = modificarReferencia($conta);
    exibirMensagem("Saldo Original: Titular:  {$conta['titular']}  /Valor:  {$conta['saldo']}");  
}


