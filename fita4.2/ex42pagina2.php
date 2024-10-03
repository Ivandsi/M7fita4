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
    $_SESSION['frase1'] = $_POST['frase1'];
    ?>

    <h2>Enregistra frase 2</h2>
    <form action="ex42pagina3.php" method="post">
        <label for="frase2">Introdueix la frase 2:</label>
        <input type="text" id="frase2" name="frase2">
        <input type="submit" value="Enviar">
    </form>
</body>

</html>