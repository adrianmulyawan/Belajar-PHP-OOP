<?php 

class Person
{
    // Menggunakan const
    // Constant itu menempel didalam class, berbeda dari properties/method (function) menempel di object
    // const AUTHOR = "Adrian Mulyawan";

    // Properties
    // Properties Type Declaration
    var string $name;
    // Nullable Properties
    var ?string $address;
    // Default Properties Value
    var string $country = "Indonesia";

    // Constructor
    // function __construct(string $name, ?string $address)
    // {
    //     $this->name = $name;
    //     $this->address = $address;

    //     echo "Hello, Selamat Datang {$name} dan alamatmu disinikan {$address}" . PHP_EOL;
    // }

    // Method / Function
    // Parameter "$name" method/function dapat kita kosongkan (nullable)
    function sayHello(?string $name)
    {
        if (!isset($name)) {
            echo "Hello, my name is $this->name" . PHP_EOL;
        } else {
            echo "Hi $name, my name is $this->name" . PHP_EOL;
        }
    }

    // Method / Function
    // function authorInfo()
    // {
        // Mengakses constant AUTHOR menggunakan keyword self
        // Menggunakan "self" karena berada di class yang sama
        // echo "AUTHOR : " . self::AUTHOR . PHP_EOL;
    // }

    // Destructor
    // function __destruct()
    // {
    //     echo "Object person {$this->name} is destroyed";
    // }
}
