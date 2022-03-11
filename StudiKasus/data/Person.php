<?php 

class Person
{
    // Menggunakan const
    // Constant itu menempel didalam class, berbeda dari properties/method (function) menempel di object
    const AUTHOR = "Adrian Mulyawan"; #nilainya tidak bisa diubah

    // Properties
    // Properties Type Declaration
    var string $name;
    // Nullable Properties
    var ?string $address = null;
    // Default Properties Value
    var string $country = "Indonesia";

    // Constructor
    function __construct(string $name, ?string $address)
    {
        $this->name = $name;
        $this->address = $address;
    }

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
    function authorInfo()
    {
        // mengakses variable constant AUTHOR menggunakan keyword "self"
        echo "AUTHOR : " . self::AUTHOR . PHP_EOL;
    }

    // Destructor
    function __destruct()
    {
        echo "Object Person $this->name is destroyed" . PHP_EOL;
    }
}
