<?php
    class conta{
        public $idconta;
        public $nome;
        public $senha;
        public $agencia;
        public $saldo;
        function deposito($valor_adicionado){
            $this->saldo+=$valor_adicionado;
            echo("Seu saldo atual é de: ".$this->saldo."\n");
        }
        function saque($valor_subtraido){
            if(($this->saldo-$valor_subtraido)>=0){
                $this->saldo-=$valor_subtraido;
                echo("Seu saldo atual é de: ".$this->saldo."\n");
            }else{
                echo("O saque de ".$valor_subtraido." é impossível, o valor máximo de saque é de:".$this->saldo."\n");
            }
        }
        function exibir(){
            echo($this->saldo."\n");
        }
    }
?>