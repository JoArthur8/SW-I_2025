<?php
    include_once 'exercicio02.class.php';

    $carro1 = new Carro();

    $carro1->Marca = "Toyota";
    $carro1->Modelo = "Corolla Altis 2.0";
    $carro1->Combustivel = "Gasolina/Etanol";
    $carro1->Portas = "4";
    $carro1->Capacidade_tanque = "50 Litros";

    $carro2 = new Carro();

    $carro2->Marca = "Volkswagen";
    $carro2->Modelo = "Polo 1.0 TSI";
    $carro2->Combustivel = "Gasolina/Etanol";
    $carro2->Portas = "4";
    $carro2->Capacidade_tanque = "52 Litros";
    
    $carro3 = new Carro();

    $carro3->Marca = "Chevrolet";
    $carro3->Modelo = "Onix Premier 1.0 Turbo";
    $carro3->Combustivel = "Gasolina/Etanol";
    $carro3->Portas = "4";
    $carro3->Capacidade_tanque = "44 Litros";
    
    $carro4 = new Carro();

    $carro4->Marca = "Honda";
    $carro4->Modelo = "HR-V EXL 1.5 Turbo";
    $carro4->Combustivel = "Gasolina";
    $carro4->Portas = "4";
    $carro4->Capacidade_tanque = "53 Litros";
    
    $carro5 = new Carro();

    $carro5->Marca = "Fiat";
    $carro5->Modelo = "Argo 1.3 Drive";
    $carro5->Combustivel = "Gasolina/Etanol";
    $carro5->Portas = "4";
    $carro5->Capacidade_tanque = "48 Litros";
    
    $carro1->MostrarDados();
    $carro2->MostrarDados();
    $carro3->MostrarDados();
    $carro4->MostrarDados();
    $carro5->MostrarDados();
?>