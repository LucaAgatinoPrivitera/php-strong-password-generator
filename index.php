<?php
$userPassword = '';

if (isset($_GET['userPassword']) && !empty($_GET['userPassword'])) {
    $numero_caratteri = (int)$_GET['userPassword'];
} else {
    $numero_caratteri = 0; // Imposta un valore predefinito
}
$allowedChars = "qwertyuiopasdfghjklzxcvbnm";

function getName($n)
{
    $allowedChars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';

    for ($i = 0; $i < $n; $i++) {
        $index = rand(0, strlen($allowedChars) - 1);
        if ($n > strlen($allowedChars)) {
            return "Errore: Numero di caratteri richiesto è maggiore dei caratteri unici disponibili.";
        }

        $char = $allowedChars[$index];

        // Da chiedere, chatgpt mi dice che devo tenere false, ma con false ottengo solo caratteri uguali
        if (strpos($randomString, $char) === true) {
            $randomString .= $char;
        }
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


    <h1> <?php if ($numero_caratteri > 0) {
                echo ($numero_caratteri);
            } ?>
    </h1>
    <p>
        <?php if ($numero_caratteri > 0) {
            getName($numero_caratteri);
            echo "<span>" . "$randomString";
        }
        ?>
    </p>

</body>

</html>