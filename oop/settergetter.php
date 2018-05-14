<?php

class SetterGetterExample {
    private $a=100;
    
    public function get_a() {
        return $this->a;
    }
    
    public function set_a($value) {
        $this->a = $value;
    }
}

$tili1 = new SetterGetterExample();
echo "Tilin saldo on: " . $tili1->get_a() . "<br>";


if(isset($_POST['nosta'])) {
    $saldo = get_a();
$nosto = $_POST['raha'];
    if ($nosto > $saldo) {
    echo "Saldosi ei riitä";
} else {
    echo "Onnistui";
}
}

?>

<form action="settergetter.php" method="post">
        Nosta rahaa: <input type="number" name="raha" /><br>
        <p><input type="submit" name="nosta" value="OK" /></p>
    </form>
