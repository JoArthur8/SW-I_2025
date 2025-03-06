<?php

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $data = $_POST['data'];
    $cartao = $_POST['cartao'];

    echo "<p>Nome: $nome</p>";
    echo "<p>Email: $email</p>";
    echo "<p>Data de Nascimento: $data</p>";
    echo "<p>Bandeira do Cartão: $nome</p>";

?>