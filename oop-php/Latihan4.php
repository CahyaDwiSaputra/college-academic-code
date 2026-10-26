<?php
Class Basisdata{
    public $parameter;
    public function __construct(){
        $this->konfigurasi();
    }

    public function konfigurasi(){
        echo "Konfigurasi Selesai";
    }

    public function tambah(){
        echo "Proses tambah selesai";
    }

    public function edit(){
        echo "Proses edit selesai";
    }

    public function hapus(){
        echo "Proses hapus selesai";
    }

    public function baca(){
        echo "Proses baca selesai";
    }
}

$basisdata= new Basisdata;
echo "\n";
$basisdata->tambah();
echo "\n";
$basisdata->edit();
echo "\n";
$basisdata->hapus();
echo "\n";
$basisdata->baca();
?>