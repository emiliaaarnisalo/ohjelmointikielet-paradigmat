<!doctype html>
<html>

<head>
    <title>Numeronarvauspeli</title>
    <meta charset=utf-8>
    
    <style>
        body {
            font-size:1.5em;
        }
    </style>
</head>

<body>

<?php 
$randomnumber = rand(1,10);
$guessed = htmlspecialchars($_POST['number']);

echo 'Veikkauksesi on ' . $guessed . '.<br><br>';

if ($randomnumber > $guessed) {
    echo 'Numero on suurempi.';
} elseif ($randomnumber == $guessed) {
    echo 'Satunnainen numero on ' . $randomnumber . '. Arvasit numeron oikein!';
} else {
    echo 'Numero on pienempi.';
}

echo '<br><br><a href="http://emiliaaarnisalo.com/metropolia/ohjelmointikielet-paradigmat/numeronarvaus.php">Kokeile uudestaan</a>';

?>
    
</body>
</html>