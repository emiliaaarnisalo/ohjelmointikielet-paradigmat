<?php

class Auto {
    public $wheels = 4;
    public $doors = 4;

    function count() {
        return $this->wheels + $this->doors;
    }
}

class KompaktiAuto extends Auto {
    public $doors = 2;
}

$car = new Auto();
$car2 = new KompaktiAuto();
echo "Tässä tavallisessa autossa on " . $car->count() . " pyörää ja ovea.<br>";
echo "Kompaktissa autossa on " . $car2->count() . " pyörää ja ovea.<br>";

?>