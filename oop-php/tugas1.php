<?php

class Laptop {
    public $merk;
    public $prosesor;
    public $ram;

    public function __construct($merk, $prosesor, $ram) {
        $this->merk = $merk;
        $this->prosesor = $prosesor;
        $this->ram = $ram;
    }

    public function tampilkanInfo() {
        echo "Detail Laptop: \n";
        echo "Merk: $this->merk\n";
        echo "Prosesor: $this->prosesor\n";
        echo "Kapasitas RAM: $this->ram GB\n\n";
    }
}

$laptop = new Laptop("Asus", "Intel Core I3", 8);
$laptop->tampilkanInfo();

?>