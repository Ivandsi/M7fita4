<!DOCTYPE html>
<html lang="ca">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fita 4 - Exercici 1</title>
</head>

<body>
    <h2>Nombre enregistrar</h2>
    <?php
    session_start();
    $_SESSION['ocult'] = $_POST['ocult'];
    ?>
    <p>El número ha estat enregistrat correctament.</p>
    <p><a href="ex41pagina3.php">Endevinar</a></p>

</body>

</html>