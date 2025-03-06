<?php

    $login = $_POST['login'];
    $senha = $_POST['senha'];

    if ($login == 'etec'){
        if($senha == 'informática'){
            echo "Logado com sucesso";
        }
    }

?>