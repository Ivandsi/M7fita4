<!DOCTYPE html>
<html lang="ca">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fita 4 - Exercici 3</title>
</head>

<body>

</body>

</html>

<?php
session_start();

// Initialize the session variable if it doesn't exist
if (!isset($_SESSION['letters'])) {
    $_SESSION['letters'] = '';
}

if (isset($_GET['reset'])) {
    if ($_GET['reset'] == 'true') {
        $_SESSION['letters'] = '';
    }
}

if (isset($_GET['space'])) {
    if ($_GET['space'] == 'true') {
        $_SESSION['letters'] .= " ";
    }
}
// Get the letter from the URL parameter
$letter = isset($_GET['letter']) ? $_GET['letter'] : '';

// Append the letter to the session variable
$_SESSION['letters'] .= $letter;
?>

<!DOCTYPE html>
<html lang="ca">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fita 4 - Exercici 3</title>
    <style>
        .keyboard {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            grid-gap: 10px;
        }

        .keyboard a {
            display: block;
            padding: 10px;
            text-align: center;
            text-decoration: none;
            color: blue;
            background-color: #f2f2f2;
        }

        .keyboard a:hover {
            color: red;
            background-color: #c7f2f2;
        }

        .keyboard a:active {
            color: blue;
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <h2>Lletres acumulades:</h2>
    <p><?php echo $_SESSION['letters']; ?></p>

    <h2>Teclat virtual</h2>
    <div class="keyboard">
        <?php for ($i = 97; $i <= 122; $i++) { ?>
            <a href="?letter=<?php echo chr($i); ?>"><?php echo chr($i); ?></a>
        <?php } ?>
        <a href="?space=true">Espai en blanc</a>
        <a href="?reset=true">Limpiar</a>
    </div>



</body>

</html>