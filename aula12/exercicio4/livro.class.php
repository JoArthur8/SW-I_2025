<?php
    class Livro{
        private $Titulo;
        private $Autor;
        private $Disponivel;

        public function __construct($nome,$autor,$disponivel = True){
            $this->Titulo = $nome;
            $this->Autor = $autor;
            $this->Disponivel = $disponivel;
        }

        public function EmprestarLivro(){
            $this->Disponivel = False;
        }
        public function DevolverLivro(){
            $this->Disponivel = True;
        }
        public function exibirStatus(){
            echo $this->Titulo . "<br>";
            if ($this->Disponivel == True){
                echo "O livro está Dísponivel";
            } else{
                echo "O livro foi Emprestado";
            }
        }
    }

?>