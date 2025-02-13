<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo01</title>
</head>
<body>
    <p>Bom dia, meu nome é João</p>
    <?php
        $nome = "João";
        echo "<p>Bom dia, meu nome é João</p>";
        echo "<p>Bom dia, meu nome é $nome</p>";
        echo "<p>Bom dia, meu nome é " . $nome . "</p>";
    ?>
</body>
</html>