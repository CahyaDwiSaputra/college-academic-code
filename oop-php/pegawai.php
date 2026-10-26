<?php
class Pegawai {
    protected $nama;
    protected $gajiPokok;

    public function __construct($nama, $gajiPokok) {
        $this->nama = $nama;
        $this->gajiPokok = (int)str_replace('.', '', $gajiPokok);
    }

    public function getInfo() {
        return "Nama: $this->nama, Gaji Pokok: Rp " . number_format($this->gajiPokok, 0, ',', '.');
    }
}

class PegawaiTetap extends Pegawai {
    private $tunjangan;

    public function __construct($nama, $gajiPokok, $tunjangan) {
        parent::__construct($nama, $gajiPokok);
        $this->tunjangan = (int)str_replace('.', '', $tunjangan);
    }

    public function getInfo() {
        return parent::getInfo() . ", Tunjangan: Rp " . number_format($this->tunjangan, 0, ',', '.');
    }

    public function hitungGaji() {
        return $this->gajiPokok + $this->tunjangan;
    }
}

class PegawaiKontrak extends Pegawai {
    private $honor;
    private $totalJam;

    public function __construct($nama, $honor, $totalJam) {
        parent::__construct($nama, 0); // gajiPokok tidak dipakai
        $this->honor = (int)str_replace('.', '', $honor);
        $this->totalJam = (int)$totalJam;
    }

    public function getInfo() {
        return parent::getInfo() . ", Honor: Rp " . number_format($this->honor, 0, ',', '.') . ", Total Jam: $this->totalJam";
    }

    public function hitungGaji() {
        return $this->honor * $this->totalJam;
    }
}

$pegawai1 = new PegawaiTetap("Sugeng", "5.000.000", "3.500.000");
$pegawai2 = new PegawaiKontrak("Supri", "30.000", "192");

echo $pegawai1->getInfo() . " . Gaji Total: Rp " . number_format($pegawai1->hitungGaji(), 0, ',', '.') . "\n";
echo $pegawai2->getInfo() . " . Gaji Total: Rp " . number_format($pegawai2->hitungGaji(), 0, ',', '.') . "\n";
?>
