<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios Aula 06</title>
</head>
<body>
    <table>
        <tr>
            <th>A</th>
            <th>B</th>
            <th>C</th>
            <th>D</th>
        </tr>
        
        <?php
        
            for ($i = 1; $i <= 8; $i++) {
                if ($i % 2 == 0) {
                    echo "<tr style='background-color: cyan;'>";
                    echo "
                        <td>Coluna 1, Linha $i</td>
                        <td>Coluna 2, Linha $i</td>
                        <td>Coluna 3, Linha $i</td>
                        <td>Coluna 4, Linha $i</td>
                    </tr>
                ";
                } else {
                    echo "<tr style='background-color: green;'>";
                    echo "
                        <td>Coluna 1, Linha $i</td>
                        <td>Coluna 2, Linha $i</td>
                        <td>Coluna 3, Linha $i</td>
                        <td>Coluna 4, Linha $i</td>
                    </tr>
                ";
                }
                
            }

        ?>
    </table>
</body>
</html>