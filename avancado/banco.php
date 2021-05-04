<?php

function exibirMensagem($msg){
    echo $msg . PHP_EOL;
}

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
$saldo = 0;

foreach ($contasCorrentes as $cpf => $conta) {

    $saldo = $conta['saldo'];

    if($saque > $saldo){
        exibirMensagem("Saque negado! Saldo insuficiente");
    }else{    
        $saldo -= 500;
        exibirMensagem($cpf . " " . $conta['titular']  . " Saque realizado com sucesso!");
    }
   
}
