<?php
    class Aluno{

        private $Nome;
        private $Nota1;
        private $Nota2;

        public function __construct($nome,$n1,$n2){
            $this->Nome = $nome;
            $this->Nota1 = $n1;
            $this->Nota2 = $n2;
        }

        public function getNome(){
            return $this->Nome;
        }

        public function getMedia($media){
            $media = ($this->Nota1 + $this->Nota2)/2;
            return $media;
        }

        public function verificarSituacao(){
            
        }
    }
?>