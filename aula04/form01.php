<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 04 - Exercícios GET </title>
</head>
<body>
    <p> 1. Usando o método GET, crie um formulário que receba o nome do estudante, 3 notas de Zero à Dez e calcule a média quando um botão de submit for pressionado! Faça a validação dos campos de modo que usuário tenha que preencher todos os campos e todos numéricos</p>
    <form action="exercicio01.php" method="GET">
        <label for="validationCustom01" class="form-label">Nome do estudante</label>
        <input type="text" class="form-control" id="validationCustom01" name="nome"  required>
        <br>
        <label for="quantity">Sua primeira Nota:</label>
        <input type="number" id="quantity" name="n1" min="0" max="10" required>
        <br>
        <label for="quantity">Sua segunda Nota:</label>
        <input type="number" id="quantity" name="n2" min="0" max="10" required>
        <br>
        <label for="quantity">Sua terceira Nota:</label>
        <input type="number" id="quantity" name="n3" min="0" max="10" required>
        <br>
        <input type="submit" value="Enviar">

    </form>
</body>
</html>