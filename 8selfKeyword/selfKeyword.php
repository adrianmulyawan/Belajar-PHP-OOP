<?php 

// > Properties vs Constant
// 1. Saat kita membuat object, properties yang terdapat di class akan secara otomatis dibuat perobject, oleh karena itu untuk mengakses properties, kita perlu menggunakan object, atau jika dari dalam object tsb sendiri, kita perlu menggunakan kata kunci this.
// 2. Sedangkan berbeda dengan constant, constant di class tidak akan dibuat per object. Constant itu hidupnya di class, bukan di object, oleh karena itu untuk mengaksesnya kita perlu menggunakan "NamaClass::NAMA_CONSTANT".
// 3. Secara sederhana, properties akan dibuat satu per instance class (object), sedangkan constant dibuat satu per class.

// > self Keyword
// 1. Jika di dalam class (misal function) kita ingin mengakses constant, kita perlu mengakses menggunakan NamaClass::NAMA_CONSTANT
// 2. Namun jika didalam class yang sama, kita bisa menggunakan kata kunci "self::NAMA_CONSTANT" untuk mempermudah

// > Beda Keyword self dan this
// - self: mengakses class saat ini
// - this: mengakses object saat ini

// > Contoh self Keyword
// class Person
// {
    // const AUTHOR = "Adrian Mulyawan";

    // function authorInfo()
    // {
        // echo "AUTHOR : " . self::AUTHOR . PHP_EOL;
    // }
// }