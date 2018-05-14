<?php

class Henkilo {
    public $etunimi;
    public $sukunimi;
    public $ika;
    
    function __construct($etunimi, $sukunimi, $ika) {
        $this->etunimi = $etunimi;
        $this->sukunimi = $sukunimi;
        $this->ika = $ika;
    }
    
    function puhu() {
        echo 'Hei, nimeni on ' . $this->etunimi . ', ' . $this->etunimi . " " . $this->sukunimi . ". Olen " . $this->ika . " vuotta!<br>";
    }
}

$aapeli = new Henkilo("Aapeli", "Aapinen", 22);
$laura = new Henkilo("Laura", "Lappi", 15);

$aapeli->puhu();
$laura->puhu();

?>