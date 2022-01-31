<?php

// > Trait Abstract Function
// 1. Selain konkrit function, di trait kita juga bisa menambahkan abstract function.
// 2. Jika terdapat abstract function di trait, maka secara otomatis function tersebut harus di override di class yang menggunakan trait tsb. 

// > Contoh Trait Abstract Function
// namespace Data\CanRun;

// trait SayGoodBye
// {
    // public function goodBye(?string $name): void
    // {
        // if (is_null($name)) {
            // echo "Good bye" . PHP_EOL;
        // } else {
            // echo "Good bye $name" . PHP_EOL;
        // }
    // }
// }

// trait sayHello
// {
    // public function hello(?string $name): void
    // {
        // if (is_null($name)) {
            // echo "Hello" . PHP_EOL;
        // } else {
            // echo "Hello $name" . PHP_EOL;
        // }
    // }
// }

// Trait Properties
// trait HasName
// {
    // public string $name;
// }

// Implementasi Trait Overriding
// trait CanRun
// {
    // public abstract function run(): void;
// }

// class Person
// {
    // Memanggil Trait SayGoodBye dan SayHello (Fungsi hello dan goodBye)
    // Memanggil Trait Properties
    // use SayGoodBye, sayHello, HasName, CanRun;

    // Disini akan terjadi error karena kita tidak mengoverride function run() dari trait CanRun
    // public function run(): void
    // {
        // echo "Person $this->name is running" . PHP_EOL;
    // }
// }

// $person = new Person();
// $person->hello("Adrian");
// $person->goodBye("Adrian");
// Hello Adrian
// Good bye Adrian

// $person->name = "Adrian";
// var_dump($person);

// Jalankan function run (trait CanRun)
// $person->run();
// Hasil: Person Adrian is running

// =================================================================================================

// > Trait Overriding
// 1. Jika sebuah class memiliki parent class yang memiliki function yang sama dengan function di trait, maka secara otomatis trait akan meng-override function tsb.
// 2. Namun jika kita membuat function yang sama di class nya, maka secara otomatis kita akan meng-override function di trait
// 3. Sehingga posisinya seperti ini ParentClass = override by => Trait = override by => ChildClass
// Parent Class akan ter-override oleh Trait
// Trait akan ter-override oleh Child Class

// =================================================================================================

// > Contoh Trait Overriding 1: 
// namespace Data\CanRun;

// trait SayGoodBye
// {
    // public function goodBye(?string $name): void
    // {
        // if (is_null($name)) {
            // echo "Good bye" . PHP_EOL;
        // } else {
            // echo "Good bye $name" . PHP_EOL;
        // }
    // }
// }

// trait sayHello
// {
    // public function hello(?string $name): void
    // {
        // if (is_null($name)) {
            // echo "Hello" . PHP_EOL;
        // } else {
            // echo "Hello $name" . PHP_EOL;
        // }
    // }
// }

// Trait Properties
// trait HasName
// {
    // public string $name;
// }

// Implementasi Trait Abstract
// trait CanRun
// {
    // public abstract function run(): void;
// }

// class Person
// {
    // Memanggil Trait SayGoodBye dan SayHello (Fungsi hello dan goodBye)
    // Memanggil Trait Properties
    // use SayGoodBye, sayHello, HasName, CanRun;

    // Disini akan terjadi error karena kita tidak mengoverride function run() dari trait CanRun
    // public function run(): void
    // {
        // echo "Person $this->name is running" . PHP_EOL;
    // }

    // Contoh Trait Override (Mengoverride function yang ada di trait)
    // public function goodBye(?string $name): void
    // {
        // echo "Good bye in Person" . PHP_EOL;
    // }

    // public function hello(?string $name): void
    // {
        // echo "Hello in Peson" . PHP_EOL;
    // }
// }

// $person = new Person();
// $person->hello("Adrian");
// $person->goodBye("Adrian");
// Hello Adrian
// Good bye Adrian
// Maka akan menjalankan function hello() & goodBye() di class Person walaupun disini kita telah membuat functionnya juga didalam trait SayGoodbye dan trait sayHello (Jadi yang didahulukan function yang dibuat di classnya / Trait ter override oleh function yang dibuat di class)

// $person->name = "Adrian";
// var_dump($person);

// Jalankan function run (trait CanRun)
// $person->run();
// Hasil: Person Adrian is running

// =================================================================================================

// > Contoh Trait Overriding 2
// namespace Data\CanRun;

// trait SayGoodBye
// {
    // public function goodBye(?string $name): void
    // {
        // if (is_null($name)) {
            // echo "Good bye" . PHP_EOL;
        // } else {
            // echo "Good bye $name" . PHP_EOL;
        // }
    // }
// }

// trait sayHello
// {
    // public function hello(?string $name): void
    // {
        // if (is_null($name)) {
            // echo "Hello" . PHP_EOL;
        // } else {
            // echo "Hello $name" . PHP_EOL;
        // }
    // }
// }

// Trait Properties
// trait HasName
// {
    // public string $name;
// }

// Implementasi Trait Abstract
// trait CanRun
// {
    // public abstract function run(): void;
// }

// class ParentPerson {
    // Contoh Trait Override (Mengoverride function yang ada di trait)
    // public function goodBye(?string $name): void
    // {
        // echo "Good bye in Person" . PHP_EOL;
    // }

    // public function hello(?string $name): void
    // {
        // echo "Hello in Peson" . PHP_EOL;
    // }
// }

// class Person extends ParentPerson
// {
    // Memanggil Trait SayGoodBye dan SayHello (Fungsi hello dan goodBye)
    // Memanggil Trait Properties
    // use SayGoodBye, sayHello, HasName, CanRun;

    // Disini akan terjadi error karena kita tidak mengoverride function run() dari trait CanRun
    // public function run(): void
    // {
        // echo "Person $this->name is running" . PHP_EOL;
    // }
// }

// $person = new Person();
// $person->hello("Adrian");
// $person->goodBye("Adrian");
// Hello Adrian (Maka akan menjalankan function hello() di trait sayHello)
// Good bye Adrian (Maka akan menjlan function goodBye() di trait SayGoodbye)
// Artinya function goodBye() dan hello() akan teroverride oleh trit sayHello dan SayGoodbye

// $person->name = "Adrian";
// var_dump($person);

// Jalankan function run (trait CanRun)
// $person->run();
// Hasil: Person Adrian is running

// =================================================================================================

// > Trait Visibility Override
// 1. Selain melakukan override function di class, kita juga bisa melakukan override visibility function yang terdapat di trait
// 2. Namun untuk melakukan itu tidak perlu membuat function baru di class, kita bisa gunakan secara sederhana ketika menggunakan traitnya

// > Contoh Trait Visibility Override
namespace Data\CanRun;

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

class Person extends ParentPerson
{
    // Trait Visibility Override
    use SayGoodBye, sayHello, HasName, CanRun {
        // Kita ubah visibility function hello from trait sayHello
        // hello as private;
        // Kita ubah visibility function goodBye() from trait SayGoodbye
        // goodBye as private;
    }

    // Disini akan terjadi error karena kita tidak mengoverride function run() dari trait CanRun
    public function run(): void
    {
        echo "Person $this->name is running" . PHP_EOL;
    }

    // Contoh Trait Override (Mengoverride function yang ada di trait)
    // public function goodBye(?string $name): void
    // {
    //     echo "Good bye in Person" . PHP_EOL;
    // }

    // public function hello(?string $name): void
    // {
    //     echo "Hello in Peson" . PHP_EOL;
    // }
}

$person = new Person();
$person->hello("Adrian");
$person->goodBye("Adrian");
// Error karena visibility function hello dan goodBye -> private

$person->name = "Adrian";
var_dump($person);

// Jalankan function run (trait CanRun)
$person->run();
// Hasil: Person Adrian is running