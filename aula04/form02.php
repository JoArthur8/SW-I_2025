<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 04 - Exercícios GET </title>
</head>
<body>
    <p>2. Usando o método GET, crie um formulário que receba três números e verifique qual deles é o maior. Faça a validação dos campos de modo que usuário tenha que preencher todos os campos.</p>
    <form action="exercicio02.php" method="GET">
        <label for="quantity">N1:</label>
        <input type="number" id="quantity" name="n1" required>
        <br>
        <label for="quantity">N2:</label>
        <input type="number" id="quantity" name="n2" required>
        <br>
        <label for="quantity">N3:</label>
        <input type="number" id="quantity" name="n3" required>
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>