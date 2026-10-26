<?php

class Mahasiswa {
    public $nama;
    public $nim;
    public $jurusan;

    public function __construct($nama, $nim, $jurusan = "Teknik Informatika") {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    public function tampilkanData() {
        echo "Informasi Mahasiswa: \n";
        echo "Nama: $this->nama\n";
        echo "NIM: $this->nim\n";
        echo "Jurusan: $this->jurusan\n\n";
    }
}

$mahasiswa = new Mahasiswa("Cacan", "V3924023");
$mahasiswa->tampilkanData();

?>