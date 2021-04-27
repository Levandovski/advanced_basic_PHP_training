<?php

$cont = 1;

while($cont <= 15){
    
    echo $cont . PHP_EOL;
    
    $cont++;
}


$cont2 = 1;

do{
    echo "DO ".$cont2 . PHP_EOL;    
    $cont2++;
}while($cont2 <= 15);


for($i = 1; $i<=15; $i++){

    echo $i . PHP_EOL;

}

for($i = 1; $i<=15; $i++){

    if($i === 13){
        continue; //Continua a instrução se for igual a 13, ou seja ele não executa o que está embaixo
    }       
    echo $i . PHP_EOL;        
    
}

for($i = 1; $i<=15; $i++){

    if($i === 13){
        break; //Encerra a instrução
    }       
    echo $i . PHP_EOL;        
    
}