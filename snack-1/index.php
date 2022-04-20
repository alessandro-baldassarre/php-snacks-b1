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
    <!-- /**
     * Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario.
     * Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
     * Stampiamo a schermo tutte le partite con questo schema.
        Olimpia Milano - Cantù | 55-60
     *
     */ -->

    <h2>Snack 1</h2>

    <?php

    $matches = [
        [
            "casa" => "milano",
            "trasferta" => "cantu",
            "puntiCasa" => 90,
            "puntiTrasferta" => 120
        ],
        [
            "casa" => "palermo",
            "trasferta" => "roma",
            "puntiCasa" => 80,
            "puntiTrasferta" => 110
        ],
        [
            "casa" => "salerno",
            "trasferta" => "genova",
            "puntiCasa" => 56,
            "puntiTrasferta" => 110
        ],
    ];

    ?>
    <ul>
        <?php
        for ($i = 0; $i < count($matches); $i++) { ?>

            <li><?php echo $matches[$i]["casa"] . "-" . $matches[$i]["trasferta"] . " ! " . $matches[$i]["puntiCasa"] . "-" . $matches[$i]["puntiTrasferta"] ?></li>

        <?php } ?>
    </ul>


    <hr>

</body>

</html>