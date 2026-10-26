<?php
class Mobil {

    private $pemilik = "Fery";
    private $merk = "ferrari";

    public function __construct(){
        echo "Ini berasal dari Constructor Mobil";
    }

    public function hidupkan_mobil(){
        return "Hidupkan mobil $this->merk punya $this->pemilik";
    }

    public function __destruct(){
        echo "Ini berasal dari Destructor Mobil";
    }
}

$mobil_fery = new mobil();
echo "\n";
echo $mobil_fery->hidupkan_mobil();
echo "\n";

unset($mobil_fery);

echo "\n";
echo "Objek Telah Dihancurkan";
?>
