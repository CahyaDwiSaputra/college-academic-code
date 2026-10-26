<?php
class Sandal {
    public $merk;
    public $ukuran;
    public $warna;
    public $bahan;

    function set_merk($merk) {
        $this->merk = $merk;
    }

    function get_merk() {
        return $this->merk;
    }
}

$swallow = new Sandal();
$eiger = new Sandal();

$swallow->set_merk("Swallow");
$eiger->set_merk("Eiger");

echo $swallow->get_merk();
echo "<br>";
echo $eiger->get_merk();

?>