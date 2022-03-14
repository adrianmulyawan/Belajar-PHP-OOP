<?php 

// > Trait Inheritance
// 1. Sebelumnya kita sudah tahu bahwa class bisa menggunakan trait lebih dari satu
// 2. Lantas bagaiaman dengan yang mengggunakan trait lain?
// 3. Trait bisa menggunakan trait lain, mirip seperti interface yang bisa implements ke interface lain
// 4. Untuk menggunakan trait lain dari trait, poenggunaannya sama seperti dengan penggunaan trait lain di class

// > Contoh Trait Inheritance
namespace Data\All;

trait SayGoodBye
{
    public function goodBye(?string $name): void
    {
        if (is_null($name)) {
            echo "Good bye" . PHP_EOL;
        } else {
            echo "Good bye $name" . PHP_EOL;
        }
    }
}

trait SayHello
{
    public function hello(?string $name): void
    {
        if (is_null($name)) {
            echo "Hello" . PHP_EOL;
        } else {
            echo "Hello $name" . PHP_EOL;
        }
    }
}

// Trait Properties
trait HasName
{
    public string $name;
}

// Implementasi Trait Abstract
trait CanRun
{
    public abstract function run(): void;
}

class ParentPerson {
    // Contoh Trait Override (Mengoverride function yang ada di trait)
    public function goodBye(?string $name): void
    {
        echo "Good bye in Person" . PHP_EOL;
    }

    public function hello(?string $name): void
    {
        echo "Hello in Peson" . PHP_EOL;
    }
}

trait All
{
    use SayGoodBye, SayHello, HasName, CanRun;
}

class Person extends ParentPerson
{
    // Di class Person cukup panggil trait All
    // Karena trait All sudah inheritance ke trait SayGoodBye, SayHello, HasName, dan CanRun
    use All;

    // Disini akan terjadi error karena kita tidak mengoverride function run() dari trait CanRun
    public function run(): void
    {
        echo "Person $this->name is running" . PHP_EOL;
    }
}

$person = new Person();
$person->hello("Adrian");
$person->goodBye("Adrian");
// Error karena visibility function hello dan goodBye -> private

$person->name = "Adrian";
var_dump($person);

// Jalankan function run (trait CanRun)
$person->run();