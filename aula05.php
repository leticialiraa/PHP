<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

    table{
        border-collapse: collapse;
    }
    td{
        border: 3px solid black;
    }
    .pink{
        background-color: pink
    }

    </style>

</head>

<body>

    <?php
    echo "<h1>Tabeela de cores</h1>";
    echo "<table>";
    for ($i=0; $i<10; $i++){
        if ($i%2==0){
            echo "<tr><td class='pink'>$i</td></tr>";
        } 
        else{
            echo "<tr><td>$i</td></tr>";
        }
    }
    echo "</table>";

    ?>

</body>

</html>
