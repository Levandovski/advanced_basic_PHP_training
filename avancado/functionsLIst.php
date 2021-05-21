<?php

$idadeList = [21, 23, 19, 25, 30, 41, 18];

list($idadeVinicius, $idadeJoao, $idadeMaria) = $idadeList;

$idadeList[] = 20;

[4 => $idadeRose] = $idadeList;

unset($idadeList[5]);

unset($idadeList[7]);

echo "$idadeVinicius $idadeJoao $idadeMaria $idadeRose" . PHP_EOL;

foreach ($idadeList as $idade){
    echo $idade . PHP_EOL;
}