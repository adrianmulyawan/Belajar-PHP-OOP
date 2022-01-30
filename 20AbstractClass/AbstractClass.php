<?php

// > Abstract Class
// 1. Saat kita membuat sebuah class, kita bisa menjadikan sebuah class sebagai abstract class
// 2. Abstract class artinya, class tersebut bisa dibuat sebagai object secara langsung, hanya bisa diturunkan
// 3. Untuk membuat sebuah class menjadi abstract, kita bisa menggunakan kata kunci "abstract" sebelum kata kunci class
// 4. Sehingga Abstract Class bisa kita gunakan sebagai kontrak child class

// -------------------------------------------------------------------------------------------------

// > Contoh Abstract Class 
// namespace Data;

// abstract class Location
// {
    // public string $name;
// }

// Class Location tidak dapat langsung kita buat menjadi sebuah Object karena saat kita paksa menjadi object akan menjadi error. Oleh karena itu kita harus membuat kelas turunannya untuk dapat mengakses properties/method abstract class Location

// class City extends Location
// {

// }

// class Province extends Location
// {

// }

// class Country extends Location
// {

// }

// -------------------------------------------------------------------------------------------------

// > Membuat Objek dari Abstract Class

// $location = new Location();
// $location->name = "Location Unknown";
// echo "$location->name" . PHP_EOL;
// Error: Tidak bisa instansiasi abstract class

// $city = new City();
// $city->name = "Pontianak";
// echo "$city->name" . PHP_EOL;
// Hasil: Pontianak

// $province = new Province();
// $province->name = "Kalimantan Barat";
// echo "$province->name" . PHP_EOL;
// Hasil: Pontianak

// $country = new Country();
// $country->name = "Indonesia";
// echo "$country->name" . PHP_EOL;
// Hasil: Indonesia