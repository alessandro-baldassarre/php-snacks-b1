<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>PHP Snacks b1</h1>

    <h2>Snack 4</h2>
    <!-- Creare un array con 15 numeri casuali, tenendo conto che l'array non dovrà contenere lo stesso numero più di una volta -->

    <?php
    $randomArray = [];
    $i = 0;
    while ($i < 15) {
        $randomNumber = random_int(0, 15);
        if (!in_array($randomNumber, $randomArray)) {
            $randomArray[] = $randomNumber;
            $i++;
        }
    }
    var_dump($randomArray);
    ?>

    <hr>

</body>

</html>