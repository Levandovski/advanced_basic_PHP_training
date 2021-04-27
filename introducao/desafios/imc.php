<?php 

$imc = 0;
$status;
$peso = 72;
$altura = 1.70;

$calcIMC = $peso/($altura * $altura);

if($calcIMC < 18.5){
    $status="Magreza";
}elseif($calcIMC >= 18.5 && $calcIMC <= 24.9){
    $status="Normal";
}elseif($calcIMC >=24.9 && $calcIMC <= 30){
    $status="Sobrepeso";
}else{
    $status="Obesidade";
}

echo "O resultado do seu IMC é de : $calcIMC seu status é $status";



