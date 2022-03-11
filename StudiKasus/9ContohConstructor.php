<?php 

require_once "data/Person.php";

// Kita tambahkan 2 parameter disini karena pada method construct kita memiliki 2 buah parameter
// 1. name
// 2. address
$manda = new Person("Mandalika Ayusti", "JL Sao - Sao No 21");
$manda->country = "Kendari";

echo "Nama: " . $manda->name . PHP_EOL;
echo "Asal: " . $manda->country . PHP_EOL;

$manda->sayHello(null);
$manda->authorInfo();

var_dump($manda);