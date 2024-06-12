<?php
$userPassword = $_GET["userPassword"];
// A quanto pare questo non funziona in questo caso, da chiedere
// include 'index.php';
$numero_caratteri = (int)$_GET['userPassword'];
$allowedChars = "qwertyuiopasdfghjklzxcvbnm";

function getName($n) {
    $allowedChars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
 
    for ($i = 0; $i < $n; $i++) {
        $index = rand(0, strlen($allowedChars) - 1);
        $randomString .= $allowedChars[$index];
    }
 
    return $randomString;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-strong-password-generator</title>
    <style>
        body {
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }
    </style>
</head>

<body>
    <h1><?php echo ($numero_caratteri) ?>
        <?php
        $i = 1;
        while ($i <= $numero_caratteri) {
            getName($numero_caratteri);
            $i++;
            echo "<span>" . "$randomString";
        }
        ?>

    </h1>
</body>

</html>