<?php


function exibirMensagem($msg)
{
    echo $msg . PHP_EOL;
}

function depoistar(array $conta, float $valorDepositado): array
{
    $conta['saldo'] += $valorDepositado;
    exibirMensagem("Novo saldo adicionado: " . 'Titular: ' . $conta['titular'] . "/Valor: " .$conta['saldo']);
    return $conta;
}

function saque(float $saque, array $conta,  $cpf): array
{
    echo "AQUI ". $conta['saldo'];
    if($saque >  $conta['saldo']){
        exibirMensagem("Saque negado! Saldo insuficiente " . $conta['titular']  .'/Valor:'. $conta['saldo']);
    }else{    
        $conta['saldo'] -= $saque;
        exibirMensagem($cpf . " " . 'Titular: ' .$conta['titular']  .'/Valor:'. $conta['saldo'] ." Saque realizado com sucesso!");
    }
    return $conta;
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

$depositar = 900;

foreach ($contasCorrentes as $cpf => $conta) { 
    exibirMensagem("Saldo Original: Titular:  {$conta['titular']}  /Valor:  {$conta['saldo']}");  
    $conta = depoistar($conta, $depositar);
    $conta = saque($saque, $conta, $cpf);   
}


