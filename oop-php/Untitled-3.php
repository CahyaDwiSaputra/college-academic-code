<?php
class Minuman {
    public $nama;
    public $jenis;
    public $rasa;
    public $suhu;

    function set_nama($nama) {
        $this->nama = $nama;
    }

    function get_nama() {
        return $this->nama;
    }
}

$kopi = new Minuman();
$teh = new Minuman();

$kopi->set_nama("Kopi Hitam");
$teh->set_nama("Teh Hijau");

echo $kopi->get_nama();
echo "<br>";
echo $teh->get_nama();

?>