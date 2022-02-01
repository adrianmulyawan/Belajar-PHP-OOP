<?php

interface HelloWorld
{
    function sayHello(): void;
}

# Membuat Anonymous Function
// $helloWorld = new class implements HelloWorld {
    // public function sayHello(): void
    // {
        // echo "Hello Word" . PHP_EOL;
    // }
// };

# Menjalankan Anonymous Function
// $helloWorld->sayHello();

// ================================================================================================

# Membuat Constructor di Anonymous Class
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
# Hasil: Hello Adrian