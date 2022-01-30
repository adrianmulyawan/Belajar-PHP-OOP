<?php 

require_once "data/Person.php";

$person1 = new Person();
$person1->name = "Adrian Mulyawan";
$person1->address = "JL Sui Raya Dalam";
$person1->country = "Indonesia";

echo "Name: $person1->name" . PHP_EOL;
echo "Address: $person1->address" . PHP_EOL;
echo "Country: $person1->country" . PHP_EOL;

var_dump($person1) . PHP_EOL . PHP_EOL;

$person2 = new Person();
$person2->name = "Mandalika Ayusti Naw";
$person2->address = "JL Sao Sao No 21";
$person2->country = "Indonesia";

// Contoh error
// $person2->name = [];
// Error karena propertie $name pada class Person kita deklarasikan sebagai strin dan disini kita ubah menjadi array

echo "Name: $person2->name" . PHP_EOL;
echo "Address: $person2->address" . PHP_EOL;
echo "Country: $person2->country" . PHP_EOL;

var_dump($person2) . PHP_EOL;

$person3 = new Person();
$person3->name = "Dhafia Raisha Kamila";
$person3->address = null;
$person3->country = "Malaysia";

echo "Name: $person3->name" . PHP_EOL;
echo "Address: $person3->address" . PHP_EOL;
// Disini bisa diliaht kita tidak memberikan value pada properties $country pada object $peson3 dan ketika kita panggil maka akan mengahsilkan value properties $country = "Indonesia"
echo "Country: $person3->country" . PHP_EOL;

var_dump($person3) . PHP_EOL . PHP_EOL;