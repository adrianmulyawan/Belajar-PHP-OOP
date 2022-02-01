<?php 

// > Object Iteration
// 1. Saat kita membuat object dari sebuah class, kita bisa melakukan iterasi ke semua properties yang terdapat di object tersebut menggunakan foreach
// 2. Hal ini mempermudah kita saat ingin mengakses semua properties yang ada di object
// 3. Secara default, hanya properties yang public yang bisa diakses oleh foreach

// > Contoh Object Iterasi
// class Data
// {
    // var string $first = "First";
    // public string $second = "Second";
    // protected string $third = "Third";
    // private string $forth = "Forth";
// }

// $data = new Data();

// foreach ($data as $property => $value) {
    // echo "$property : $value" . PHP_EOL;
    // Hasil:
    // first : First
    // second : Second
// }

// =================================================================================================

// > Iterator
// 1. Sebelumnya kita melakukan iterasi data di properties secara otomatis menggunakan foreach
// 2. Jika kita ingin menangani hal ini secara manual, kita bisa menggunakan Iterator
// 3. Iterator adalah interface yang digunakan untuk melakukan iterasi, namun membuat Iterator secara manual lumayan cukup ribet, oleh karena itu sekarang kita akan gunakan "ArrayIterator", yaitu iterator yang menggunakan array sebagai data iterasi nya
// 4. Dan agar class kita bisa di iterasi secara manual, kita bisa menggunakan interface "IteratorAggregate", disana kita hanya butuh meng-override function "getIterator()" yang mengembalikan data Iterator

// > Contoh Iterator
