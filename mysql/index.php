<?php 

echo "<h1>Mysql</h1>";

$mysql_yhteys = mysqli_connect("", "okp", "oli9tRR3", "emilia-okp");
$query = "select etunimi, sukunimi, puhnro from emilia-okp";

$result = mysqli_query($mysql_yhteys, $query)
or die("Virhe: " . mysqli_error($mysql_yhteys));

while($rivi=mysqli_fetch_array($result)) {
echo ($rivi["etunimi"] ." ". $rivi["sukunimi"] ." " . $rivi["puhnro"] . "<br>\n");
}

?>