<?php
    class Conta{
        public $Nome;
        public $Cpf;
        private $Saldo;

        public function Sacar($valor){
            if ($valor > $this->Saldo){
                $resultado = "Saldo Insuficiente". "<hr>";
                return $resultado;
            } else{
                $this->Saldo -= $valor;
                $resultado = "Saldo atualizado para R$ ". $this->Saldo. "<hr>";
            return $resultado;
            }
            
            
        }
        public function Depositar($valor){
            $this->Saldo += $valor;
            $resultado = "Saldo atualizado para R$ ". $this->Saldo. "<hr>";
            return $resultado;
        }
        public function ConsultarSaldo(){
            echo "Nome: ". $this->Nome. "<br>";
            echo "Cpf: ". $this->Cpf. "<br>";
            echo "Saldo: ". $this->Saldo . "<br>";
            echo "<hr>";
        }
    }
?>