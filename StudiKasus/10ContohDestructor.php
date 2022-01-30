<?php 

require_once "data/Person.php";

$dhafia = new Person("Dhafia Raisha Kamila", "JL Serdam");
$dhafia->country = "Pontianak";

echo "Nama: {$dhafia->name}" . PHP_EOL;
echo "Alamat: {$dhafia->address}" . PHP_EOL;
echo "Asal: {$dhafia->country}" . PHP_EOL; 

$dhafia->sayHello("Acha");
$dhafia->authorInfo();