<?php

require "src/Conta.php";


$conta = new Conta();

$conta->cpfTitular = '123.543.123-54';
$conta->nomeTitular = "Jessé Levandovski";
$conta->saldo = 5000;

echo "<pre>";
var_dump($conta);
echo "</pre>";