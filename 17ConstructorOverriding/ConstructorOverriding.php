<?php 

// > Constructor Overriding
// 1. Karena constructor sama seperti funtion, maka constructor-pun bisa kita deklarasikan ulang di class Child-nya.
// 2. Sebenarnya di PHP, kita bisa meng-override function dengan arguments yang berbeda, namun sangat tidak disarankan.
// 3. Jika kita melakukan override function dengan arguments yang berbeda, maka PHP akan menampilkan WARNING
// 4. Namun berbeda dengan constructtor overriding, kita boleh meng-override dengan mengubah argumentsnya, namun direkomendasikan untuk memanggil parent constructor

// > Contoh Constructor Overriding
class Barista
{
    var string $name;
    var string $title;

    public function __construct(string $name = "", string $title = "Barista")
    {
        $this->name = $name;
        $this->title = $title;
    }

    function sayHello(string $name)
    {
        echo "Hi $name, my name is Barista $this->name" . PHP_EOL;
    }
}

class Owner extends Barista
{
    // Override ke function __constructor class 
    public function __construct(string $name = "")
    {
        // Tidak Wajib, Tapi Direkomendasikan
        parent::__construct($name, "Owner");
    }

    function sayHello(string $name)
    {
        echo "Hi $name, my name is Owner $this->name" . PHP_EOL;
    }
}

// > Pembuatan Objectnya
$barista = new Barista("Rony", "Headbar");
// $barista->name = "Bobby";
// $barista->title = "Staff Bar";
$barista->sayHello("Miftah");
// Hasil: Hi Miftah, my name is Barista Rony

$owner = new Owner("Adrian");
$owner->name = "Manda";
$owner->sayHello("Rizal");
// Hasil: Hi Rizal, my name is Owner Manda