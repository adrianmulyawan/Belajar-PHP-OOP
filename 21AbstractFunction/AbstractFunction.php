<?php

// > Abstract Function
// 1. Saat kita membuat class yang abstract, kita bisa membuat "abstract function" juga didalam class abstract tersebut.
// 2. Saat kita membuat sebuah abstract function, kita tidak boleh membuat block function untuk function tsb.
// 3. Artinya, abstract function wajib di override di class child
// 4. Abstract function tidak boleh access modifier / visibility private

// > Contoh Abstract Function
namespace Data;

# Abstract Clas
abstract class Animal
{
    public string $name;

    # Abstract Function
    abstract public function run(): void;
}

class Cat extends Animal
{
    public function run(): void
    {
        echo "Cat $this->name running!" . PHP_EOL;
    }
}

class Dog extends Animal
{
    public function run(): void
    {
        echo "Dog $this->name running!" . PHP_EOL;
    }
}

// Bisa dilihat pada contoh diatas kita membuat abstract function dengan nama run(). dan bisa kita lihat juga pada child class nya wajib mengoverride function run tsb dan menjalankan block code didalamnya. Apabila jika tidak dijalankan function tsb misalnya disalah satu class turunanya maka akan menyebabkan error pada code PHP

// -------------------------------------------------------------------------------------------------

// > Test Menjadikan Object dan Menjalankannya
$cat = new Cat();
$cat->name = "joko";
$cat->run();
// Hasil: Cat joko running!

$dog = new Dog();
$dog->name = "Shiba Inu";
$dog->run();
// Hasil: Dog Shiba Inu running!