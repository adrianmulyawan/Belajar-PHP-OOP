<?php

// > Function atau Method
// 1. Selain menambahkan properties, kita juga bisa menambahkan function/method ke object
// 2. Cara dengan mendeklarasikan function tsb didalam block class
// 3. Sama seperti function biasanya, kita bisa menambahkan return value dan parameter
// 4. Untuk mengakses function tsb, kita bisa menggunakna tanda "->" diikuti dengan nama methodnya. Sama seperti mengakses properties.

// > Kode: Function / Method
class Person
{
    // Properties
    var string $name;
    var string $address;
    var string $country;

    // Method / Function
    function sayHello(string $name)
    {
        echo "Hello $name" . PHP_EOL;
    }
}

// > Memanggil / Mengakase Function
$person1 = new Person();
$person1->sayHello('Budi');