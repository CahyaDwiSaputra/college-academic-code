<?php
class Suhu
{
    public $celcius;

    function __construct($celcius)
    {
        $this->celcius = $celcius;
        echo "Konversi Suhu dari Celcius\n";
        echo "Suhu dalam celcius = $celcius derajat \n";
    }

    public function kelvin()
    {
        $kelvin = $this->celcius + 273.15;
        echo "Suhu dalam kelvin = $kelvin derajat\n";
    }

    public function fahrenheit()
    {
        $fahrenheit = $this->celcius * 1.8 + 32;
        echo "Suhu dalam fahrenheit = $fahrenheit derajat \n";
    }

    function __destruct()
    {
        echo "Sekian konversi suhu yang bisa dilakukan \n";
    }
}

$suhu = new Suhu(36);
$suhu->kelvin();
$suhu->fahrenheit();
?>