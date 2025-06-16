<?php
    include_once 'retangulo.class.php';
    $retangulo = new Retangulo(5,8);
    echo $retangulo->calcularArea() ."<br>";
    echo $retangulo->calcularPerimetro();
?>