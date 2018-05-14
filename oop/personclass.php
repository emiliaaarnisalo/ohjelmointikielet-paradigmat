<?php

class Person {
    public $etunimi = '';
    public $sukunimi = '';
    
    function say_hello() {
        echo "Hello from inside the class " . get_class($this) . ".<br>";
    }
    
    function koko_nimi() {
        echo "Hello from inside the class " . $this->etunimi . " " . $this->sukunimi;
    }
}

$person = new Person();
$person->etunimi = "Emilia";
$person->sukunimi = "Aarnisalo";
echo $person->koko_nimi();

?>