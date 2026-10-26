<?php
class Handphone {
    // Properties
    public $merek;
    public $tipe;

    // Methods
    function set_merek($merek) {
        $this->merek = $merek;
    }

    function get_merek() {
        return $this->merek;
    }
}

$samsung = new Handphone();
$iphone = new Handphone();

$samsung->set_merek('Samsung');
$iphone->set_merek('iPhone');

echo $samsung->get_merek();
echo "<br>";
echo $iphone->get_merek();
?>
