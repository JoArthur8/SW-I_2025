<?php
    include_once 'livro.class.php';
    $livro = new Livro("Harry Potter","J.K. Rowling",True);
    $livro->exibirStatus();
?>