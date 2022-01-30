<?php

// > Function Overriding
// 1. Function Overriding adalah kemampuan mendeklarasikan ulang function di child class, yang sudah ada di parent class
// 2. Saat kita melakukan proses overriding tersebut, secara otomatis ketika kita mmebuat object dari class child, function yang di class parents tidak bisa diakses lagi

// > Contoh Overidding Function
class ProductDesign
{
    var string $name;

    function sayHello(string $name)
    {
        echo "Hi $name, my name is Product Design $this->name" . PHP_EOL;
    }
}

class FrontendDeveloper extends ProductDesign
{
    // Overidding function sayHello dari class ProductDesign
    function sayHello(string $name)
    {
        echo "Hi $name, my name is Frontend Developer $this->name" . PHP_EOL;
    }
}

// > Saat Object Dibuat
$productDesign = new ProductDesign();
$productDesign->name = "Raudy";
$productDesign->sayHello("Kemal");
// Hasil: Hi Kemal, my name is Product Design Raudy

$frontendDev = new FrontendDeveloper();
$frontendDev->name = "Irfan";
$frontendDev->sayHello("Indah");
// Hasil: Hi Indah, my name is Frontend Developer Irfan