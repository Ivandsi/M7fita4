<!DOCTYPE html>
<html lang="ca">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fita 4 - Exercici 1</title>
</head>

<body>
    <h2>Endevina el nombre</h2>
    <?php
    session_start();
    if (!isset($_POST['endevina'])) {
    ?>
        <form method="post">
            <label for="endevina">Introdueix un número sencer:</label>
            <input type="number" id="endevina" name="endevina">
            <input type="submit" value="Enviar">
        </form>
        <?php
    } else {
        $ocult = $_SESSION['ocult'];
        $endevina = $_POST['endevina'];
        if ($endevina == $ocult) {
        ?>
            <p>Enhorabona! Has endevinat el número!</p>
            <p><a href="ex41pagina1.php">Tornar a començar</a></p>
        <?php
        } else {
            // Si no es igual, mostramos un mensaje y volvemos a mostrar el formulario
            if ($endevina < $ocult) {
                $mensaje = "El número que has introduït és menor que el número ocult.";
            } else {
                $mensaje = "El número que has introduït és major que el número ocult.";
            }
        ?>
            <p><?php echo $mensaje; ?></p>
            <form action="" method="post">
                <label for="endevina">Introdueix un número sencer:</label>
                <input type="number" id="endevina" name="endevina">
                <input type="submit" value="Enviar">
            </form>
    <?php
        }
    }
    ?>
</body>

</html>