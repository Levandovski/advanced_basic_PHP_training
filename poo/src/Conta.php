<?php

class Conta{

    public $cpfTitular;
    public $nomeTitular;
    public $saldo = 0;

    public function sacar(float $valorSacar){

        if($valorSacar > $this->saldo){

            echo "Saldo indisponivel";
            return;
        }

        $this->saldo -= $valorSacar;
     
    }

    public function depositar(float $valorDepositar): void {

        if($valorDepositar < 0){
            echo "Valor precisa ser positivo";
            return;
        }
        
        this->saldo += $valorDepositar;
        
    }

    public function transferir(float $valorTransferir, $contaDestino): void {

        if($valorTransferir > $this->saldo){
            
            echo "Saldo indisponível";
            return;
        }

        $this->sacar($valorTransferir);
        $contaDestino->depositar($valorTransferir);

    }

}