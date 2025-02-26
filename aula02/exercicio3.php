<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 02 - Exercícios</title>
</head>
<body>
    <?php
        $n1 = 12;
        $n2 = 3;
    //aritméticos
    echo "<h1>Operadores Aritméticos</h1>";
        $add = $n1 + $n2;
        $sub = $n1 - $n2;
        $div = $n1 / $n2;
        $mult = $n1 * $n2;
        $resto = $n1 % $n2;

        echo  "<p>$n1</p>";
        echo "<p>$n2</p>";
        echo "<p>$add</p>";
        echo "<p>$sub</p>";
        echo "<p>$div</p>";
        echo "<p>$mult</p>";
        echo "<p>$resto</p>";
    //atribuição
    echo "<h1>Operadores de Atribuição</h1>";
        $n1 += $n2;
        echo "<p>$n1</p>";
        $n1 -= $n2;
        echo "<p>$n1</p>";
        $n1 /= $n2;
        echo "<p>$n1</p>";
        $n1 *= $n2;
        echo "<p>$n1</p>";
        $n1 %= $n2;
        echo "<p>$n1</p>";
    ?>
</body>
</html>