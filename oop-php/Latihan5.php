<?php
class Buku {
    public $judul;
    public $pengarang;

    public function __construct($judul = "Tentang Kamu", $pengarang = "Detektif Conan") {
        $this->judul = $judul;
        $this->pengarang = $pengarang;
    }
}

$bukuBaru = new Buku();

echo $bukuBaru->judul; // Output: Tentang Kamu
echo "\n";
echo $bukuBaru->pengarang; // Output: Detektif Conan
?>
