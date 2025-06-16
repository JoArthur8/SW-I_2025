<?php
    class Retangulo{
        private $Largura;
        private $Altura;

        public function __construct($largura,$altura){
            $this->Largura = $largura;
            $this->Altura = $altura;
        }
        public function getLargura(){
            return $this->Largura;
        }
        public function getAltura(){
            return $this->Altura;
        }
        public function calcularArea(){
            return $this->Largura*$this->Altura;;
        }
        public function calcularPerimetro(){
            return ($this->Largura+$this->Altura)*2;
        }
    }
?>