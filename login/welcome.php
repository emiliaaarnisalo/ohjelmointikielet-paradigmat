<?php 
    session_start();

    if(isset($_POST['logout'])) {
        session_unset();
        header('Location: login.php');
    }
?>

<!doctype html>
<html>

<head>
    <title>Kirjautumisjärjestelmä</title>
    <meta charset=utf-8>
    
    <style>
        body {
            width:100%;
            font-size:1.5em;
            background-color:darkseagreen;
        }
        
        #login {
            width:50%;
            margin:auto;
            background-color:#fff;
            padding:5%;
            margin-top:5%;
        }
        
        input {
            border-bottom:1px solid darkseagreen;
        }
    </style>
</head>

<body>
    
<?php //luetaan istuntomuuttujat
$nimi = $_SESSION["login_user"];
$sala = $_SESSION["login_pass"];
//tulostetaan tiedot
echo "Tunnus on " . $nimi . " ja salasana on " . $sala;
?>

    
<form action="welcome.php" method="post">
 <p><input type="submit" name="logout" value="Kirjaudu ulos" /></p>
    </form>
    
    
</body>
</html>