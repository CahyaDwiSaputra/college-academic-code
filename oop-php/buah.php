<?php
class Buah {
    protected $nama;
    protected $warna;

    public function __construct($nama, $warna) {
        $this->nama = $nama;
        $this->warna = $warna;
    }

    public function getInfo() {
        return "Nama Buah: $this->nama, Warna: $this->warna";
    }
}

class BuahManis extends Buah {
    private $kadarGula;

    public function __construct($nama, $warna, $kadarGula) {
        parent::__construct($nama, $warna);
        $this->kadarGula = $kadarGula;
    }

    public function getInfo() {
        return parent::getInfo() . ", Kadar Gula: $this->kadarGula gram";
    }
}

class BuahAsam extends Buah {
    private $tingkatKeasaman;

    public function __construct($nama, $warna, $tingkatKeasaman) {
        parent::__construct($nama, $warna);
        $this->tingkatKeasaman = $tingkatKeasaman;
    }

    public function getInfo() {
        return parent::getInfo() . ", Tingkat Keasaman: " . $this->tingkatKeasaman / 10;
    }
}

$buah1 = new BuahManis("Mangga", "Kuning", 15);
$buah2 = new BuahAsam("Jeruk Nipis", "Hijau", 9);

echo $buah1->getInfo() . "\n";
echo $buah2->getInfo() . "\n";
?>
