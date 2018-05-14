<?php

include 'db.php';

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Kuvagalleria</title>
        
        <style>
        body {
            width: 100%;
            background-color:beige;
        }
            
        div#lataa {
            width: 60%;
            margin: auto;
            text-align: center;
            background-color:#fff;
            padding:2%;
        }
            
        input[type="file"] {
            background-color: beige;
            padding: 5px;
            margin: 20px 0;
        }

        input[type="number"] {
            border: 1px solid;
            padding: 5px;
            margin: 20px 0;
        }

        input[type="submit"] {
            background-color: beige;
            border: 0;
            padding: 5px;
            margin: 0 20px;
        }

        input[type="text"] {
            width: 50%;
            margin: auto;
            text-align: center;
            border:1px solid;
            padding:5px;
            margin:20px 0;
        }
            
        .kuva, .kuva img {
            max-width: 200px;
            float: left;
            padding: 10px;
            text-align: center;
        }

        div#galleria {
            width: 50%;
            margin: auto;
            text-align:center;
        }
        </style>
        
    </head>
<body>

<div id="lataa">
    <h1>Lataa kuva</h1>
    
    <form action="kuvagalleria.php" enctype="multipart/form-data" method="POST">
    <input type="hidden" name="MAX_FILE_SIZE" value="2000000" />
    <input type="file" name="kuva" accept="image/*" /><br>
    <input type="text" name="kuvateksti" placeholder="Anna kuvateksti" /><br>
    <input type="number" name="pin" placeholder="PIN-koodi" /> <input type="submit" name="submit" value="Lataa kuva" />
    </form>

<?php

/* SIIRRÄ KUVAT */

if(isset($_POST['submit']) && ($_POST['pin'] == $pin)) {
 // process the form data
 $tmp_file = $_FILES['kuva']['tmp_name'];
 $target_file = basename($_FILES['kuva']['name']);
 $upload_dir = "uploads";
$kuvateksti = $_POST['kuvateksti'];
$aika = time();

 if(move_uploaded_file($tmp_file, $upload_dir."/".$target_file)){
   	echo "Lataus onnistui.";
   	$mysql_yhteys = mysqli_connect($host, $user, $pass, $db);
	$query = "insert into kuvat (nimi, sijainti, kuvateksti, aika) values (\"$target_file\", \"$upload_dir\", \"$kuvateksti\", \"$aika\");";
	
	$result = mysqli_query($mysql_yhteys, $query)
        or die(mysqli_error($mysql_yhteys));

	// mysqli_free_result($result);
	mysqli_close($mysql_yhteys);

 } else {
   echo "Lataus epäonnistui: " . $_FILES['kuva']['error'];
 }

}
?>  
</div> <!-- lataa -->
    
<div id="galleria">
    <h1>Kuvagalleria</h1>
    <?php
    /* NÄYTÄ KUVAT */

// aukaistaan tietokantayhteys
$mysql_yhteys = mysqli_connect($host, $user, $pass, $db);

// määritellään kysely
$query = "select nimi, sijainti, kuvateksti, aika from kuvat";

// suoritetaan kysely
$result = mysqli_query($mysql_yhteys, $query)
        or die("Virhe: " . mysqli_error($mysql_yhteys));

// käydään läpi ja tulostetaan kyselyn tulos
while($rivi=mysqli_fetch_array($result)) {
        echo "<div class='kuva'>";
		$kohde = $rivi["sijainti"] ."/" . $rivi["nimi"];
        echo "<a href=\"$kohde\"><img src=\"$kohde\"></a> <br>";
        echo $rivi["kuvateksti"] . "<br>";
        echo $rivi["aika"];
        echo "</div>";
}

// Free result set
mysqli_free_result($result);
mysqli_close($mysql_yhteys);
?>  
</div> <!-- galleria -->
    
</body>
</html>