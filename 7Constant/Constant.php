<?php

// > Constant
// 1. Properties di class bisa diubah, mirip seperti variable
// 2. Di class juga kita bisa membuat constant (data yang tidak bisa diubah)
// 3. Di materi php dasar, kita belajar untuk membuat constant itu perlu menggunakan function define()
// 4. Namun sejaka PHP 7.4, kita bisa menggunakan kata kunci "const" untuk membuat constant, mirip seperti variable, namun tidak menggunakan karakter "$" 

// Kode: Constant
// - Menggunakan define()
define("APPLICATION", "Belajar PHP OOP");
// - Menggunakan keyword const
const APP_VERSION = "1.0.0";

echo APPLICATION . PHP_EOL;
echo APP_VERSION . PHP_EOL;
// Hasil:
// Belajar PHP OOP
// 1.0.0