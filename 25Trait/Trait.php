<?php 

// > Trait
// 1. Selain class dan interface, di PHP terdapat feature lain bernama trait
// 2. Trait mirip dengan abstract class, kita bisa membuat konkrit function atau abstract function dan bahkan properties
// 3. Yang membedakan adalah, di trait bisa kita tambahkan ke dalam class lebih dari satu
// 4. Trait mirip seperti ekstension, dimana kita bisa menambahkan konkrit function ke dalam class dengan trait
// 5. Secara sederhana trait adalah digunakan untuk menyimpan function-function yang bisa digunakan ulang di beberapa class
// Cocok digunakan ketika kita ingin memiliki function yang general yang dapat digunakan ulang
// 6. Untuk menggunakan trait di class, kita bisa menggunakan kata kunci use

// > Contoh Trait
namespace Data\Traits;

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

trait sayHello
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

// > Menggunakan Trait
class Person 
{
    use sayGoodBye, sayHello;
}

$person = new Person();
$person->hello("Adrian");
$person->goodBye("Adrian");
// Hello Adrian
// Good bye Adrian

// =================================================================================================

// > Trait Properties
// 1. Berbeda dengan interface, di trait, kita bisa menambahkan properties
// 2. Dengan menambahkan properties, secara otomatis class tersebut akan memiliki properties yang ada di trait
