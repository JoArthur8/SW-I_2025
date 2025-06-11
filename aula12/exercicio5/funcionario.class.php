<?php
    class Funcionario{
        private $Nome;
        private $Salario;

        public function __construct($nome,$salario){
            $this->Nome = $nome;
            $this->Salario = $salario;
        }
        public function aumentarSalario($aumento){
            $this->Salario *= (1+$aumento/100);
        }
        public function exibirInformacoes(){
            echo $this->Nome."<br>";
            echo $this->Salario;
        }
    }
?>