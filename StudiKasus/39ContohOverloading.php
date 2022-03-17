<?php

require_once "data/Zero.php";

use Data\Zeros\Zero;

$zero = new Zero();

$zero->firstName = "Adrian";
$zero->lastName = "Mulyawan";

echo "Nama Depan : " . $zero->firstName . PHP_EOL;
echo "Nama Belakang : " . $zero->lastName . PHP_EOL;
# Hasil :
# Nama Depan : Adrian
# Nama Belakang : Mulyawan

echo "Isset : " . isset($zero->firstName) . PHP_EOL;
# Hasil : 
# Isset : 1


echo "Unset : " . isset($zero->firstName) . PHP_EOL;
# Hasil : 
# Unset : 1

echo "Nama Depan : " . $zero->firstName . PHP_EOL;
echo "Nama Belakang : " . $zero->lastName . PHP_EOL;
# Hasil :
# Nama Depan : Adrian
# Nama Belakang : Mulyawan

# Function Overloading: Function Biasa
$zero->sayHello("Adrian", "Mulyawan");
# Didalam class zero() tidak memiliki function/method yang bernama "public function sayHello()", tetapi di belakang layar PHP menjalankan magic function __call()
# Hasil: Call Function sayHello with arguments Adrian,Mulyawan

# Function Overloading: Static Function
Zero::sayGoodbye("Goodbye");
# Didalam class zero() tidak memiliki function/method yang bernama "static public function sayGoodbye("Goodbye")", tetapi di belakang layar PHP menjalankan magic function __callStatic()
# Hasil: Call Static Function sayGoodbye with arguments Goodbye