<?php

class Info {
    public $etu = "Emilia";
    protected $suku = "A";
    private $sotu = "123-456A";

    function show_info() {
        echo $this->etu . "<br>";
        echo $this->suku . "<br>";
        echo $this->sotu;
    }
}

class Lapsiluokka extends Info {
    public $puh = "050-123-4567";
}

$emilia = new Info();
$emilia->show_info();

echo "<br>";
echo "Public etunimi: " . $emilia->etu . "<br>";
echo "Protected sukunimi: " . $emilia->suku . "<br>";
echo "Private sotu: " . $emilia->sotu;

$emilia2 = new Lapsiluokka();
$emilia2->show_info();

?>