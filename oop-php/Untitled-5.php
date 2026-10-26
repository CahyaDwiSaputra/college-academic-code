<?php
class Hewan {
    public $nama;
    public $jenis;
    public $habitat;
    public $suara;
    public $makanan;

    function set_nama($nama) {
        $this->nama = $nama;
    }

    function get_nama() {
        return $this->nama;
    }

    function buat_suara() {
        return $this->nama . " bersuara: " . $this->suara;
    }

    function makan() {
        return $this->nama . " sedang makan " . $this->makanan;
    }
}

$harimau = new Hewan();
$burung = new Hewan();

$harimau->set_nama("Harimau");
$harimau->suara = "Graaaww";
$harimau->makanan = "Daging";

$burung->set_nama("Burung");
$burung->suara = "Cuit cuit";
$burung->makanan = "Biji-bijian";

echo $harimau->buat_suara();
echo "<br>";
echo $harimau->makan();
echo "<br>";
echo $burung->buat_suara();
echo "<br>";
echo $burung->makan();

?>