<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 02 - Exercícios</title>
</head>
<body>
    <?php
        define ("pi",3.141592);
        $raio = 10;

        $area = (pi)*4*$raio*$raio;
        $volume = $area*$raio/3;

        echo "<p>$area</p>";
        echo "<p>$volume</p>";
    ?>
</body>
</html>