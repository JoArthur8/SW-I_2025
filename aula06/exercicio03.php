<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios Aula 06</title>
</head>
<body>
    <?php
        $produtos = [
            [
                "nome" => "Banana",
                "preço" => 7.00,
                "categoria" => "Fruta"
            ],
            [
                "nome" => "Maçã",
                "preço" => 7.00,
                "categoria" => "Fruta"
            ],
            [
                "nome" => "Sapato",
                "preço" => 80.00,
                "categoria" => "Roupa"
            ],
            [
                "nome" => "Smatphone",
                "preço" => 1700.00,
                "categoria" => "Eletrônico"
            ],
        ];
        $cor = [
            "Fruta" => "#D2691E",
            "Roupa" => "#DAA520",
            "Eletrônico" => "#FFDEAD"
        ];
    ?>
    <h2>Tabela de Produtos</h2>

    <table>
        <tr>
            <th>Nome</th>
            <th>Preço (R$)</th>
            <th>Categoria</th>
        </tr>
    <?php 
        foreach ($produtos as $produto) {
            echo "<tr style='background-color: " . $cor[$produto['categoria']] . ";'>";
            echo "<td>" . $produto['nome'] . "</td>";
            echo "<td>" . number_format($produto['preço'], 2, ',', '.') . "</td>";
            echo "<td>" . $produto['categoria'] . "</td>";
            echo "</tr>";
        }
    ?>
</body>
</body>
</html>