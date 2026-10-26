<?php
class KendaraanListrik {
    protected $merk;
    protected $tipe;
    protected $harga;
    protected $tahunProduksi;
    protected $garansi; // dalam tahun

    public function __construct($merk, $tipe, $harga, $tahunProduksi, $garansi) {
        $this->merk = $merk;
        $this->tipe = $tipe;
        $this->harga = $harga;
        $this->tahunProduksi = $tahunProduksi;
        $this->garansi = $garansi;
    }

    public function getInfo() {
        return "Merk: $this->merk | Tipe: $this->tipe | Harga: Rp$this->harga | Tahun: $this->tahunProduksi | Garansi: $this->garansi tahun";
    }
}

class SkuterListrik extends KendaraanListrik {
    private $tipeBan;
    private $waktuPengisian; // dalam jam

    public function __construct($merk, $tipe, $harga, $tahunProduksi, $garansi, $tipeBan, $waktuPengisian) {
        parent::__construct($merk, $tipe, $harga, $tahunProduksi, $garansi);
        $this->tipeBan = $tipeBan;
        $this->waktuPengisian = $waktuPengisian;
    }

    public function getInfo() {
        return parent::getInfo() . " | Tipe Ban: $this->tipeBan | Pengisian: $this->waktuPengisian jam";
    }
}

class MotorListrik extends KendaraanListrik {
    private $suspensi;
    private $modeBerkendara;

    public function __construct($merk, $tipe, $harga, $tahunProduksi, $garansi, $suspensi, $modeBerkendara) {
        parent::__construct($merk, $tipe, $harga, $tahunProduksi, $garansi);
        $this->suspensi = $suspensi;
        $this->modeBerkendara = $modeBerkendara;
    }

    public function getInfo() {
        return parent::getInfo() . " | Suspensi: $this->suspensi | Mode: $this->modeBerkendara";
    }
}

class MobilListrik extends KendaraanListrik {
    private $jenisPenggerak;
    private $fiturAutopilot;

    public function __construct($merk, $tipe, $harga, $tahunProduksi, $garansi, $jenisPenggerak, $fiturAutopilot) {
        parent::__construct($merk, $tipe, $harga, $tahunProduksi, $garansi);
        $this->jenisPenggerak = $jenisPenggerak;
        $this->fiturAutopilot = $fiturAutopilot;
    }

    public function getInfo() {
        return parent::getInfo() . " | Penggerak: $this->jenisPenggerak | Autopilot: $this->fiturAutopilot";
    }
}

// Contoh objek
$skuter = new SkuterListrik("Viar", "Q1", 18000000, 2023, 2, "Tubeless", 4);
$motor = new MotorListrik("NIU", "NQi Sport", 27000000, 2024, 3, "Hidrolik", "Eco & Sport");
$mobil = new MobilListrik("Tesla", "Model 3", 950000000, 2023, 5, "AWD", "Ya");

echo $skuter->getInfo() . "\n";
echo $motor->getInfo() . "\n";
echo $mobil->getInfo();
?>
