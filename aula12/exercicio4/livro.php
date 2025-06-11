<?php
    include_once 'livro.class.php';
    $livro = new livro("Harry Potter","J.K. Rowling",True);
    $livro->exibirStatus();
?>