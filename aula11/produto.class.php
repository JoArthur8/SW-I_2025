<?php
    class Produto{
        private $Nome;
        private $Preco;
        private $Quantidade;

        public function __construct($nome,$preco,$quantidade = 0){
            $this->Nome = $nome;
            $this->Preco = $preco;
            $this->Quantidade = $quantidade;
            
        }
        //gets
        public function getNome($nome){
            return $this->Nome;
        }
        public function getPreco($preco){
            return $this->Preco;
        }

        //sets
        public function setNome($nome){
            $this->Nome = $nome;
        }
        public function setPreco($preco){
            $this->Preco = $preco;
        }

        public function adicionarEstoque($qtd){
            if ($qtd >= 0){
                $this->Quantidade += $qtd;
            } else{
                echo "Não foi possível realizar a operação <br>";
            }
        }
        public function removerEstoque($qtd){
            if ($this->Quantidade-$qtd >= 0){
                $this->Quantidade -= $qtd;
            } else{
                echo "Não foi possível realizar a operação <br>";
            }
        }
        public function MostrarDetalhes(){
            echo "Nome: {$this->Nome} <br>";
            echo "Preço: {$this->Preco} <br>";
            echo "Quantidade: {$this->Quantidade} <br>";
        }
    }
?>