<?php
class Handphone {
    public $merk;
    public $model;
    public $warna;
    public $kapasitas_baterai;
    public $harga;

    function set_model($model) {
        $this->model = $model;
    }

    function get_model() {
        return $this->model;
    }

    function nyalakan() {
        return $this->model . " dinyalakan!";
    }

    function matikan() {
        return $this->model . " dimatikan!";
    }

    function cek_baterai() {
        return "Baterai " . $this->model . " tersisa " . $this->kapasitas_baterai . "%";
    }
}

$iphone = new Handphone();
$samsung = new Handphone();

$iphone->set_model("iPhone 14 Pro");
$iphone->kapasitas_baterai = 80;

$samsung->set_model("Samsung Galaxy S23");
$samsung->kapasitas_baterai = 60;

echo $iphone->nyalakan();
echo "<br>";
echo $iphone->cek_baterai();
echo "<br>";
echo $samsung->matikan();
echo "<br>";
echo $samsung->cek_baterai();

?>