<?php

class PersegiPanjang {
    public $panjang;
    public $lebar;

    public function __construct($panjang, $lebar) {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }

    public function hitungLuas() {
        return $this->panjang * $this->lebar;
    }

    public function hitungKeliling() {
        return 2 * ($this->panjang + $this->lebar);
    }
}

$persegiPanjang = new PersegiPanjang(12, 7);
echo "Luas Persegi Panjang: " . $persegiPanjang->hitungLuas() . "\n";
echo "Keliling Persegi Panjang: " . $persegiPanjang->hitungKeliling() . "\n";

?>