<?php
class Mobil {

    private $pemilik;
    private $merk;

    public function __construct($pemilik, $merk) {
        $this->pemilik = $pemilik;
        $this->merk = $merk;
    }

    public function hidupkan_mobil() {
        return "Hidupkan mobil $this->merk punya $this->pemilik";
    }
}

$mobil_fery = new mobil("Fery", "Ferrari");

echo $mobil_fery->hidupkan_mobil();
echo "\n";

$mobil_Aris = new mobil("Aris", "Lamborghini");

echo $mobil_Aris->hidupkan_mobil();
?>