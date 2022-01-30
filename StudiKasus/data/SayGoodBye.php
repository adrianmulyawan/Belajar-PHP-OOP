<?php

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

// Trait Properties
trait HasName
{
    public string $name;
}

class Person
{
    // Memanggil Trait SayGoodBye dan SayHello (Fungsi hello dan goodBye)
    // Memanggil Trait Properties
    use SayGoodBye, sayHello, HasName;
}