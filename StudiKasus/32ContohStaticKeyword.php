<?php 

require_once "Helper/MathHelper.php";

use Helper\MathHelper;

// $mathHelper = new MathHelper();
// echo $mathHelper->name;
// Error: properties $name tidak ada (karena kita mengakses static property)

// Mengakses Static Properties
echo MathHelper::$name . PHP_EOL;
// Hasil: MathHelper

// Mengubah Static Value Properties
MathHelper::$name = "Adrian Mulyawan";
echo MathHelper::$name . PHP_EOL;
// Hasil: Adrian Mulyawan

// Mengakses Static Function
$result = MathHelper::sum(10, 10, 10, 10, 10);
echo MathHelper::$name = "Hasilnya adalah $result" . PHP_EOL;
// Hasil: Hasilnya adalah 50

// Tidak bisa seperti ini karena method greeting() bukan static
// $greeting = MathHelper::greeting($adrian);
// echo $greeting;