<?php

// > Inheritance
// 1. Inheritance / Pewarisan adalah kemampun untuk menurunkan sebuah class ke class lainnya.
// 2. Dalam artian, kita bisa membuat class Parent dan class Child.
// 3. Class Child, hanya bisa punya satu class Parent, namun satu class Parent bisa punya banyak class Child.
// 4. Saat sebuah class diturunkan, maka semua properties dan function/method yang ada di class Parent, secara otomatis akan dimilik oleh class Child.
// 5. Untuk melakukan pewarisan, di class Child, kita harus menggunakan kata kunci "extends" lalu diikuti dengan nama class parentnya.

// > Kode Inheritance
class Manager
{
    var string $name;

    function sayHello(string $name)
    {
        echo "Hi $name, my name is $this->name" . PHP_EOL;
    }
}

class VicePrecident extends Manager
{

}
// Class VicePrecident merupakan class child dari class Manager

// > Penggunaan Inheritance
$manager = new Manager();
$manager->name = "Mandalika Ayusti";
echo "Manager Name: $manager->name" . PHP_EOL;
$manager->sayHello("Dhafia");

$vc = new VicePrecident();
$vc->name = "Adrian Mulyawan";
echo "Vice Precident Name: $vc->name" . PHP_EOL;
$vc->sayHello("Badrun");

// Bisa kita lihat Class VicePrecident bisa menggunakan properties dan method dari class Manager