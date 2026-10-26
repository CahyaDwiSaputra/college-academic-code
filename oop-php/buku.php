<?php
class Buku {
    protected $judul;
    protected $penulis;

    public function __construct($judul, $penulis) {
        $this->judul = $judul;
        $this->penulis = $penulis;
    }

    public function getInfo() {
        return "Judul: $this->judul, Penulis: $this->penulis";
    }
}

class Fiksi extends Buku {
    private $genre;

    public function __construct($judul, $penulis, $genre) {
        parent::__construct($judul, $penulis);
        $this->genre = $genre;
    }

    public function getInfo() {
        return parent::getInfo() . ", Genre: $this->genre";
    }
}

class NonFiksi extends Buku {
    private $bidang;

    public function __construct($judul, $penulis, $bidang) {
        parent::__construct($judul, $penulis);
        $this->bidang = $bidang;
    }

    public function getInfo() {
        return parent::getInfo() . ", Bidang: $this->bidang";
    }
}

$buku1 = new Fiksi("Tentang Kamu", "Tere Liye", "Drama");
$buku2 = new NonFiksi("Ilmu Bumi", " Edward J. Tarbuck", "Pengetahuan");

echo $buku1->getInfo() . "\n";
echo $buku2->getInfo() . "\n";
?>
