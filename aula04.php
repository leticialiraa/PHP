<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício</title>
    <style>
         table{
            border-collapse: collapse;
         }
         td{
            border: 1px solid black;
         }
         img{
            width: 200px;
            height: 200px;
         }
         img{
            width: 100%;
            height: auto;
         }
         </style>
</head>
<body>
    <?php
    echo "<h1> Tabela de barbie em PHP </h1>";
    echo "<table><tr>";
    for ($i=1; $i<=5; $i++) {
        echo "<td><img src='img/foto$i.jpg'></td>";
    }
    echo "</tr></table>";
    ?>
    <?php 
    echo "<table><tr>";
    for ($i=6; $i<=10; $i++) {
        echo "<td><img src='img/foto$i.jpg'></td>";
    }
    echo "</tr></table>";
    ?>

    
</body>
</html>
