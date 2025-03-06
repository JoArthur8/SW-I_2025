<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 04 - Exercícios POST </title>
</head>
<body>
    <p>2. Crie um formulário onde o usuário informa seu nome, seu e-mail, sua data de nascimento e escolha numa lista suspensa a bandeira do seu cartão de crédito. Ao clicar em em botão de submit, exiba todos os dados na tela e não exiba o formulário após o preenchimento. </p>
    <form action="exercicio04.php" method="POST">
        <p>Nome: <input type="text" name="nome" id="" required></p>
        <p>Email: <input type="email" name="email" id="" required></p>
        <p>Data de Nascimento: <input type="date" name="data" id="" required></p>
        <p>Cartão de Crédito: <select name="cartao" id="" required>
            <option value="Mastercard">Mastercard</option>
            <option value="Visa">Visa</option>
            <option value="Elo">Elo</option>
            <option value="American Express">American Express</option>
        </select></p>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>