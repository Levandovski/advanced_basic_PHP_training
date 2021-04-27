<?php

$idade = 16;
$numeroDePessoas = 2;

echo "Você só pode entrar se tiver a partir de 10 anos ou ";
echo "a partir de 16 anos acompanhado" . PHP_EOL;

if($idade >= 10){
    echo "Você tem $idade anos. Pode entrar sozinho.";
}else if($idade >= 10 && $numeroDePessoas > 1){
    echo "Você pode entrar acompanhado.";
}else{
    echo "Você não pode entrar";
}

echo PHP_EOL;