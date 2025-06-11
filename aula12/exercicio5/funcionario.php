<?php
    include_once 'funcionario.class.php';
    $funcionario = new Funcionario("Joaquim",2);
    $funcionario->aumentarSalario(100);
    $funcionario->exibirInformacoes();
?>