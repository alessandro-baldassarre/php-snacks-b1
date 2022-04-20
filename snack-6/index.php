<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>PHP Snacks b1</h1>

    <h2>Snack 6</h2>
    <!-- Utilizzare questo array: https://pastebin.com/CkX3680A. Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde. -->

    <?php

    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];

    $dbValues = array_values($db);
    $dbKeys = array_keys($db);

    ?>


    <?php
    for ($i = 0; $i < count($dbValues); $i++) {
    ?>
        <?php if ($dbKeys[$i] === "teachers") {

        ?><div class="grey"><?php echo $dbKeys[$i] ?>

                <?php for ($index = 0; $index < (count($dbValues[$i])); $index++) { ?>

                    <pre>  <?php echo ($dbValues[$i][$index]["name"]) . " " . ($dbValues[$i][$index]["lastname"]) ?> </pre>

                <?php } ?>

            </div>
        <?php } else {
        ?><div class="green"><?php echo $dbKeys[$i] ?>

                <?php for ($index = 0; $index < (count($dbValues[$i])); $index++) { ?>

                    <pre>  <?php echo ($dbValues[$i][$index]["name"]) . " " . ($dbValues[$i][$index]["lastname"]) ?> </pre>

                <?php } ?>


            </div>
        <?php } ?>



    <?php } ?>



</body>

</html>