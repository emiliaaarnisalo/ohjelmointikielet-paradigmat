<!doctype html>
<html>

<head>
    <title>Silmukka</title>
    <meta charset=utf-8>
    
    <style>
        body {
            font-size:1.5em;
        }
    </style>
</head>

<body>
    
<form action="silmukka.php" method="post">
 <p>Kuinka monta riviä tulostetaan: <input type="number" name="number" /></p>
 <p><input type="submit" /></p>
</form>
    <br><br>
    
<?php 
  
$rows = htmlspecialchars($_POST['number']);
$printrows = 0;
$stars = '*';
    
echo 'Tulostetaan ' . $rows . ' riviä:<br><br>';
    
while ($printrows < $rows) {
    echo $stars;
    $stars .= '*';
    echo '<br>';
    $printrows++;
}
    
?>
    
</body>
</html>