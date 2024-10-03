<!DOCTYPE html>
<html lang="ca">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fita 4 - Exercici 2</title>
</head>

<body>
    <?php
    session_start();
    $frase1 = explode(" ", $_SESSION['frase1']);
    $frase2 = explode(" ", $_POST['frase2']);
    $coincidences = array_intersect($frase1, $frase2);
    ?>

    <h2>Coincidències</h2>
    <?php if (count($coincidences) > 0) { ?>
        <p>
            <?php foreach ($coincidences as $coincidence) { ?>
                La paraula <?php echo $coincidence; ?> està a les dues frases. <br>
            <?php } ?>
        </p>
    <?php } else { ?>
        <p>No hi ha cap coincidència.</p>
    <?php } ?>

    <a href="ex42pagina1.php">Tornar a la pàgina 1</a>
</body>

</html>