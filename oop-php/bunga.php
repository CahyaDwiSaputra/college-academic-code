<?php
class Bunga {
    protected $nama;
    protected $warna;

    public function __construct($nama, $warna) {
        $this->nama = $nama;
        $this->warna = $warna;
    }

    public function getInfo() {
        return "Nama Bunga: $this->nama, Warna: $this->warna";
    }
}

class Mawar extends Bunga {
    private $jumlahDuri;

    public function __construct($nama, $warna, $jumlahDuri) {
        parent::__construct($nama, $warna);
        $this->jumlahDuri = $jumlahDuri;
    }

    public function getInfo() {
        return parent::getInfo() . ", Jumlah Duri: $this->jumlahDuri";
    }
}

class Anggrek extends Bunga {
    private $asalDaerah;

    public function __construct($nama, $warna, $asalDaerah) {
        parent::__construct($nama, $warna);
        $this->asalDaerah = $asalDaerah;
    }

    public function getInfo() {
        return parent::getInfo() . ", Asal Daerah: $this->asalDaerah";
    }
}

$bunga1 = new Mawar("Mawar Merah", "Merah", 12);
$bunga2 = new Anggrek("Anggrek Bulan", "Putih", "Aceh");

echo $bunga1->getInfo() . "\n";
echo $bunga2->getInfo() . "\n";
?>
