<?php

class Produk {
    public $judul = "RogStrix";
    public $penulis = "Ramadhani";
    public $penerbit = "Asus";
    public $harga = 11000;
}

//$produk1 = new Produk();
//var_dump($produk1);

$produk2 = new Produk();
var_dump($produk2->judul);
var_dump($produk2->penulis);

?>