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

    <h2>Snack 5</h2>
    <!-- Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo. -->

    <?php
    $text = "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quae quis, sapiente amet facilis magni, eius blanditiis harum veniam error repudiandae nisi exercitationem omnis nemo provident voluptatibus voluptas dicta unde voluptates.
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cupiditate fuga impedit doloremque explicabo magni dolore? Fuga eligendi iusto rem repellat quisquam animi neque repellendus sequi minima nesciunt! Corporis, ab minima!
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab voluptatem blanditiis laboriosam cum, consequatur sed, accusantium reiciendis minima veniam nesciunt amet. Ad tempora dolorum asperiores ipsam, amet expedita ex culpa?";
    $subStrings = explode(".", $text);
    ?>

    <h4>Testo originale</h4>
    <p><?php echo $text; ?></p>

    <h4>Testo diviso in vari paragrafi</h4>
    <?php for ($i = 0; $i < count($subStrings); $i++) { ?>
        <p><?php echo $subStrings[$i]; ?></p>
    <?php } ?>

    <hr>

    
</body>

</html>