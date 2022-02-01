<?php

// > Static Keyword
// 1. Kata kunci static adalah keyword yang bisa kita gunakan untuk membuat properties atau function di class bisa diakses secara langsung tanpa menginstansiasi class terlebih dahulu
// 2. Namun ingat, saat kita buat static properties atau function, secara otomatis hal itu tidak akan berhubungan lagi dengan class instance yang kita buat
// 3. Untuk cara mengakses static properties dan function sama seperti mengakses constant, kita bisa menggunakan operator "::"
// Contoh: (Nama_Class)::(Nama_Function/Nama_Properties)
// 4. static function tidak bisa mengakses function biasa, karena function biasa menempel pada class instance sedangkan static function tidak

// > Static keyword digunakan class-class helper / utility jadi tidak butuh di instansiasi

// =================================================================================================

// > Contoh Static Keyword Pada Properties
// namespace Helper;

// class MathHelper
// {
    // Penerapan static Keyword pada properties
    // static public string $name = "MathHelper";
// }

// $mathHelper = new MathHelper();
// echo $mathHelper->name;
// Error: properties $name tidak ada (karena kita mengakses static property)

// Mengakses Static Properties
// echo MathHelper::$name . PHP_EOL;
// Hasil: MathHelper

// Mengubah Static Value Properties
// MathHelper::$name = "Adrian Mulyawan";
// echo MathHelper::$name . PHP_EOL;
// Hasil: Adrian Mulyawan

// =================================================================================================

// > Contoh Static Keyowrd Pada Function / Method
