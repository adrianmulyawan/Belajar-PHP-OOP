<?php

// > Anonymous Class
// 1. Anonymous class atau class tanpa nama.
// 2. Anonymous class adalah kemampuan mendeklarasikan class, sekaligus meng-instansiasi object-nya secara langsung (membuat class langsung dengan objectnya).
// 3. Anonymous class sangat cocok ketika kita berhadapan dengan kasus membuat implementasi interface atau abstract class sederhana, tanpa harus membuat impelementasinya

// > Contoh Anonymous Class
// interface HelloWorld
// {
    // function sayHello(): void;
// }

// Membuat Anonymous Function
// $helloWorld = new class implements HelloWorld {
    // public function sayHello(): void
    // {
        // echo "Hello Word" . PHP_EOL;
    // }
// };

// Menjalankan Anonymous Function
// $helloWorld->sayHello();
// Hasil: Hello World

// =================================================================================================

// > Constructor di Anonymous Class
// 1. Anonymous class juga mendukung constructor
// 2. Jadi kita bisa menambhakan constructor jika kita mau

// > Contoh Constructor di Anonymous Class
interface HelloWorld
{
    function sayHello(): void;
}

// Membuat Constructor di Anonymous Class
$helloWorld = new class("Adrian") implements HelloWorld {
    // Membuat Properties
    public string $name;

    // Membuat Constructor
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function sayHello(): void
    {
        echo "Hello $this->name" . PHP_EOL;
    }
};

$helloWorld->sayHello();
// Hasil: Hello Adrian