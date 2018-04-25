<?php

session_start();

if(isset($_SESSION['login_user'])){
header("Location: welcome.php");
};

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
    
    
<div id="login">
    <h1>Kirjaudu sisään</h1>
<?php
    if(isset($_POST['login'] and empty($_POST['tunnus']) or empty ($_POST['salasana']))) {
        echo "Tunnusta tai salasanaa ei ole annettu";
    } else {
        $tunnus=$_POST['tunnus'];
        $salasana=$_POST['salasana'];
        $_SESSION['login_user']=$tunnus;
        $_SESSION['login_pass']=$salasana;
        header('Location: welcome.php'); 
    }
?>
    <form action="login.php" method="post">
        Tunnus: <input type="text" name="tunnus" /><br>
        Salasana: <input type="text" name="salasana" /><br>
        <p><input type="submit" name="login" value="Kirjaudu sisään" /></p>
    </form>
</div>
    

    
</body>
</html>