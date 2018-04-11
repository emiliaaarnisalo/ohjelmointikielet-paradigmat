<?php

$esimerkki = array(1, "Emilia", 25, "Helsinki", "moi", "taulukko");

function tulostataulukko($taulukko) {
    sort($taulukko);
    foreach($taulukko as $i) {
        echo $i . '<br>';
    }
}

$tulos = tulostataulukko($esimerkki);

echo $tulos;

?>