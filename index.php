<?php
$userPassword = $_GET["userPassword"];
// A quanto pare questo non funziona in questo caso, da chiedere
// include 'index.php';
$numero_caratteri = (int)$_GET['userPassword'];
$allowedChars = "qwertyuiopasdfghjklzxcvbnm";

function getName($n)
{
    $allowedChars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';

    for ($i = 0; $i < $n; $i++) {
        $index = rand(0, strlen($allowedChars) - 1);
        $randomString .= $allowedChars[$index];
    }

    return $randomString;
}
$randomString = getName($numero_caratteri);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-strong-password-generator</title>
</head>

<body>
    <form>
        <input type="number" placeholder="Inserisci il numero di cattareri che desideri all'interno della tua password" name="userPassword" min="1">
        <button type="submit">Invia</button>
        <button type="submit">Reset</button>
        <!-- Come creo faccio in modo che al click esegua una funzione specifica? -->
    </form>


    <h1><?php if ($numero_caratteri > 0) {

            echo ($numero_caratteri);
            getName($numero_caratteri);
            echo "<span>" . "$randomString";
        }
        ?>

    </h1>

</body>

</html>