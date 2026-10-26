<?php
class Hewan {
    protected $nama;
    protected $jenis;

    public function __construct($nama, $jenis) {
        $this->nama = $nama;
        $this->jenis = $jenis;
    }

    public function getInfo() {
        return "Nama: $this->nama, Jenis: $this->jenis";
    }
}

class Kucing extends Hewan {
    private $warnaBulu;

    public function __construct($nama, $jenis, $warnaBulu) {
        parent::__construct($nama, $jenis);
        $this->warnaBulu = $warnaBulu;
    }

    public function getInfo() {
        return parent::getInfo() . ", Warna Bulu: $this->warnaBulu";
    }
}

class Burung extends Hewan {
    private $jenisSuara;

    public function __construct($nama, $jenis, $jenisSuara) {
        parent::__construct($nama, $jenis);
        $this->jenisSuara = $jenisSuara;
    }

    public function getInfo() {
        return parent::getInfo() . ", Suara: $this->jenisSuara";
    }
}

$hewan1 = new Kucing("kitty", "Kucing Persia", "Putih");
$hewan2 = new Burung("bei", "Burung Beo", "Bicara");

echo $hewan1->getInfo() . "\n";
echo $hewan2->getInfo() . "\n";
?>
