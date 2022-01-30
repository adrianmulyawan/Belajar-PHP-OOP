<?php 

require_once "data/Person.php";

$manda = new Person("Mandalika Ayusti", "JL Sao - Sao No 21");
$manda->country = "Kendari";

echo "Nama: " . $manda->name . PHP_EOL;
echo "Asal: " . $manda->country . PHP_EOL;

$manda->sayHello(null);
$manda->authorInfo();

var_dump($manda);