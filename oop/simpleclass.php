<?php

class SimpleClass
{
    //property declaration
    public $var = 'oletusarvo muuttujalle';
    
    //method declaration
    public function displayVar() {
        echo $this->var;
    }
}

$olio = new SimpleClass();
$olio->displayVar();
echo "<br>";
$olio->var = "uusi arvo";
$olio->displayVar();

?>