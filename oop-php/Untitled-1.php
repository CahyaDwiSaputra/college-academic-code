<?php
class Sepatu {
    public $merk;
    public $nama;
    public $ukuran;
    public $warna;
    public $harga;
    public $stok;

    function set_nama($nama) {
        $this->nama = $nama;
    }

    function get_nama() {
        return $this->nama;
    }

    function set_stok($stok) {
        $this->stok = $stok;
    }

    function stok_bertambah($jumlah) {
        $this->stok += $jumlah;
        return "Stok " . $this->nama . " bertambah sebanyak " . $jumlah;
    }

    function sisa_stok() {
        return "Sisa stok " . $this->nama . ": " . $this->stok;
    }
}

$newBalance990v5 = new Sepatu();
$adidasSuperstar = new Sepatu();

$newBalance990v5->set_nama("New Balance 990v5");
$newBalance990v5->set_stok(12);

$adidasSuperstar->set_nama("Adidas Superstar");
$adidasSuperstar->set_stok(15);

echo $newBalance990v5->stok_bertambah(5);
echo "<br>";
echo $newBalance990v5->sisa_stok();
echo "<br>";
echo $adidasSuperstar->sisa_stok();

?>