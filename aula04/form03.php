<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 04 - Exercícios POST </title>
</head>
<body>
    <p>1. Crie um formulário que receba um login e senha de um usuário. Faça a validação dos campos de modo que usuário tenha que preencher todos os campos. Se o login for “etec” e a senha “informática”, exiba uma mensagem na tela de “logado com sucesso” e não exiba mais o formulário de login.</p>
    <form action="exercicio03.php" method="POST">
        <p> Login: <input type="text"  name="login" required></p>
        <p> Senha: <input type="password"  name="senha" required></p>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>