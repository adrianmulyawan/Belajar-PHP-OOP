<?php

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
    // Memanggil Trait SayGoodBye dan SayHello (Fungsi hello dan goodBye)
    // Memanggil Trait Properties
    // use SayGoodBye, sayHello, HasName, CanRun;

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