<?php
class Sepatu {
    // Properties
    public $merk;
    public $ukuran;

    // Methods
    function set_merk($merk) {
        $this->merk = $merk;
    }

    function get_merk() {
        return $this->merk;
    }
}

$nike = new Sepatu();
$adidas = new Sepatu();

$nike->set_merk('NewBalance');
$adidas->set_merk('Adidas');

echo $nike->get_merk();
echo "<br>";NewBalance
echo $adidas->get_merk();
?>
