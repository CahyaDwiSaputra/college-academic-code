<?php
class ProdukMakanan {
    protected $kodeProduk;
    protected $nama;
    protected $harga;
    protected $stok;

    public function __construct($kodeProduk, $nama, $harga, $stok) {
        $this->kodeProduk = $kodeProduk;
        $this->nama = $nama;
        $this->harga = $harga;
        $this->stok = $stok;
    }

    public function getInfo() {
        return "Kode: $this->kodeProduk | Nama: $this->nama | Harga: Rp$this->harga | Stok: $this->stok pcs";
    }
}

class SayuranOrganik extends ProdukMakanan {
    private $jenisTanaman;
    private $suhuPenyimpanan;

    public function __construct($kodeProduk, $nama, $harga, $stok, $jenisTanaman, $suhuPenyimpanan) {
        parent::__construct($kodeProduk, $nama, $harga, $stok);
        $this->jenisTanaman = $jenisTanaman;
        $this->suhuPenyimpanan = $suhuPenyimpanan;
    }

    public function getInfo() {
        return parent::getInfo() . " | Jenis: $this->jenisTanaman | Suhu Simpan: $this->suhuPenyimpanan °C";
    }
}

class MakananKaleng extends ProdukMakanan {
    private $produsen;
    private $bahanPengawet;

    public function __construct($kodeProduk, $nama, $harga, $stok, $produsen, $bahanPengawet) {
        parent::__construct($kodeProduk, $nama, $harga, $stok);
        $this->produsen = $produsen;
        $this->bahanPengawet = $bahanPengawet;
    }

    public function getInfo() {
        return parent::getInfo() . " | Produsen: $this->produsen | Pengawet: $this->bahanPengawet";
    }
}

// Contoh objek
$sayur = new SayuranOrganik("ORG001", "Kangkung Organik", 4500, 20, "Daun Hijau", 10);
$kaleng = new MakananKaleng("KLG002", "Kornet Sapi", 18000, 50, "ABC Foods", "Natrium Nitrit");

echo $sayur->getInfo() . "\n";
echo $kaleng->getInfo();
?>
