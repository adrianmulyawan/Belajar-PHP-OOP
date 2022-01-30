<?php 

require_once "data/Person.php";

// - Menggunakan define()
define("APPLICATION", "Belajar PHP OOP");
// - Menggunakan keyword const
const APP_VERSION = "1.0.0";

echo APPLICATION . PHP_EOL;
echo APP_VERSION . PHP_EOL;
// Hasil:
// Belajar PHP OOP
// 1.0.0

// Mengakses Constant dari Class Person
echo "Author Name: " . Person::AUTHOR . PHP_EOL;
// Hasil = Author Name: Adrian Mulyawan