<?php
class Koleksi {
    protected $judul;
    protected $penulis;
    protected $tahunTerbit;
    protected $kodeISBN;
    protected $jumlahHalaman;

    public function __construct($judul, $penulis, $tahunTerbit, $kodeISBN, $jumlahHalaman) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->tahunTerbit = $tahunTerbit;
        $this->kodeISBN = $kodeISBN;
        $this->jumlahHalaman = $jumlahHalaman;
    }

    public function getInfo() {
        return "Judul: $this->judul | Penulis: $this->penulis | Tahun: $this->tahunTerbit | ISBN: $this->kodeISBN | Halaman: $this->jumlahHalaman";
    }
}

class Fiksi extends Koleksi {
    private $genre;
    private $targetUsia;

    public function __construct($judul, $penulis, $tahunTerbit, $kodeISBN, $jumlahHalaman, $genre, $targetUsia) {
        parent::__construct($judul, $penulis, $tahunTerbit, $kodeISBN, $jumlahHalaman);
        $this->genre = $genre;
        $this->targetUsia = $targetUsia;
    }

    public function getInfo() {
        return parent::getInfo() . " | Genre: $this->genre | Usia: $this->targetUsia+";
    }
}

class NonFiksi extends Koleksi {
    private $bidangIlmu;
    private $tingkatKesulitan;

    public function __construct($judul, $penulis, $tahunTerbit, $kodeISBN, $jumlahHalaman, $bidangIlmu, $tingkatKesulitan) {
        parent::__construct($judul, $penulis, $tahunTerbit, $kodeISBN, $jumlahHalaman);
        $this->bidangIlmu = $bidangIlmu;
        $this->tingkatKesulitan = $tingkatKesulitan;
    }

    public function getInfo() {
        return parent::getInfo() . " | Bidang: $this->bidangIlmu | Tingkat: $this->tingkatKesulitan";
    }
}

class Komik extends Koleksi {
    private $ilustrator;
    private $warna;

    public function __construct($judul, $penulis, $tahunTerbit, $kodeISBN, $jumlahHalaman, $ilustrator, $warna) {
        parent::__construct($judul, $penulis, $tahunTerbit, $kodeISBN, $jumlahHalaman);
        $this->ilustrator = $ilustrator;
        $this->warna = $warna;
    }

    public function getInfo() {
        return parent::getInfo() . " | Ilustrator: $this->ilustrator | Berwarna: $this->warna";
    }
}

class Referensi extends Koleksi {
    private $tipeReferensi;
    private $edisi;

    public function __construct($judul, $penulis, $tahunTerbit, $kodeISBN, $jumlahHalaman, $tipeReferensi, $edisi) {
        parent::__construct($judul, $penulis, $tahunTerbit, $kodeISBN, $jumlahHalaman);
        $this->tipeReferensi = $tipeReferensi;
        $this->edisi = $edisi;
    }

    public function getInfo() {
        return parent::getInfo() . " | Tipe: $this->tipeReferensi | Edisi: $this->edisi";
    }
}

// Contoh objek
$fiksi = new Fiksi("Laut Bercerita", "Leila S. Chudori", 2017, "978-602-424-694-5", 400, "Drama Sosial", 17);
$nonfiksi = new NonFiksi("Sapiens", "Yuval Noah Harari", 2011, "978-602-03-3471-0", 512, "Sejarah", "Lanjut");
$komik = new Komik("One Piece Vol.1", "Eiichiro Oda", 1997, "978-4-08-872509-3", 192, "Eiichiro Oda", "Ya");
$referensi = new Referensi("Kamus Besar Bahasa Indonesia", "Tim KBBI", 2016, "978-602-437-132-6", 1500, "Bahasa", "V");

echo $fiksi->getInfo() . "\n";
echo $nonfiksi->getInfo() . "\n";
echo $komik->getInfo() . "\n";
echo $referensi->getInfo();
?>
