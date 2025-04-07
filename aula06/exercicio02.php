<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios Aula 06</title>
</head>
<body>
    
</body>
    <form method="GET">
        <p>Quantas Linhas deseja: <input type="number" name="linha"></p>
        <p>Quantas Colunas deseja: <input type="number" name="coluna"></p>
        <input type="submit" value="Enviar">
    </form>

    <table>
        <tr>
        <?php
            echo "<table border='1'>";
            $linha = $_GET['linha'];
            $coluna = $_GET['coluna'];
            $x = 1;
            while ($x<=$coluna){
                echo "<th>Coluna:$x</th>";
                $x++;
            }
        ?>
        </tr>
        <?php

            $y = 1;        
            while ($y <= $linha){
                
                echo "<tr>";
                $x = 1;
                while ($x<=$coluna){
                        echo "<td>Linha $y, Coluna $x</td>";
                        $x++;     
                }
                echo "</tr>";
                $y++;
                
            }
        ?>
        
    </table>
</body>
</html>