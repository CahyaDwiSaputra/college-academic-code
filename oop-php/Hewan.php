<?php
class Hewan {
    // Properties
    public $nama;
    public $jenis;

    // Methods
    function set_nama($nama) {
        $this->nama = $nama;
    }

    function get_nama() {
        return $this->nama;
    }
}

$kucing = new Hewan();
$anjing = new Hewan();

$kucing->set_nama('Kucing');
$anjing->set_nama('Anjing');

echo $kucing->get_nama();
echo "<br>";
echo $anjing->get_nama();
?>
