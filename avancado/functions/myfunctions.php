<?php


function exibirMensagem($msg)
{
    echo $msg . PHP_EOL;
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

function depositar(array $conta, float $valorDepositado): array
{
    $conta['saldo'] += $valorDepositado;
    exibirMensagem("Novo saldo adicionado: " . 'Titular: ' . $conta['titular'] . "/Valor: " .$conta['saldo']);
    return $conta;
}

function modificarReferencia(array &$conta): array
{
    $conta['titular'] = mb_strtoupper($conta['titular']);
    return $conta;
}