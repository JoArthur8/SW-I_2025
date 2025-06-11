<?php
    class Retangulo{
        private $Largura;
        private $Altura;

        public function __construct($largura,$altura){
            $this->Largura = $largura;
            $this->Altura = $altura;
        }
        public function calcularArea($area){
            $area =  $this->Largura*$this->Altura;
            return $area;
        }
        public function calcularPerimetro($perimetro){
            $perimetro =  ($this->Largura+$this->Altura)*2;
            return $perimetro;
        }
    }
?>