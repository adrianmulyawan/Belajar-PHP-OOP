<?php 

require_once "data/Person.php";

$person1 = new Person();

$person1->name = "Wawan";
$person1->address = "Jl Serdam";
$person1->country = "Indonesia";

echo $person1->name . PHP_EOL;
echo $person1->address . PHP_EOL;
echo $person1->country . PHP_EOL;
$person1->sayHello("Adrian");
// Hasil: Hello Adrian, my name is Wawan

// =================================================================================================

$manda = new Person();
$manda->name = "Iko";
$manda->sayHello(null);
// Hi, my name is Iko

// Panggil Function authorInfo()
$manda->authorInfo();
$person1->authorInfo();