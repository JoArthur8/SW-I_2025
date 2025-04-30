<?php 
    include_once  'Pessoa.class.php';

    // CRIAR UM OBJETO - INSTANCIA DA CLASSE PESSOA
    $fulano  = new Pessoa();
    $ciclano  = new Pessoa();

    // var_dump($fulano)

    //  ATRIBUIR VALORES
    $fulano->Nome = "FULANO DA SILVA FERREIRA RODRIGUEZ";
    $fulano->Peso = 90;
    $fulano->Altura = 1.82;

    $ciclano->Nome = "CICLANO RÍPOLI NUNES DA SILVA";
    $ciclano->Peso = 70;
    $ciclano->Altura = 1.50;

    // CHAMANDO UM METODO DA CLASE PESSOA
    $fulano->MostrarDados();
    $ciclano->MostrarDados();
    $fulano->ApresentarDados();
    $ciclano->ApresentarDados();
?>