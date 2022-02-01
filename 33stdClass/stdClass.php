<?php

// > std Class (Standard Class)
// 1. stdClass adalah class kosong bawaan dari PHP
// 2. stdClass biasanya digunakan ketika kita melakukan konversi dari tipe lain menjadi tipe object
// 3. stdClass sangat berguna ketika misal kita ingin melakukan konversi tipe data array ke object secara otomatis / atau kebalikannya dari object ke array

// =================================================================================================

// > Mengubah Array Menjadi Object
$array = [
    "firstName" => "Adrian",
    "lastName"  => "Mulyawan"
];

// Mengubah Array Menjadi Object 
$object = (object) $array;
var_dump($object);

// key pada array diubah menjadi nama properties
echo "First Name: $object->firstName" . PHP_EOL;
// Hasil = First Name: Adrian
echo "Last Name: $object->lastName" . PHP_EOL;
// Hasil = Last Name: Mulyawan

// > Mengubah Object Menjadi Array
$arrayLagi = (array) $object;
var_dump($arrayLagi);

require_once "data/Person.php";

$person = new Person("Adrian", "Pontianak");
var_dump($person);

$arrayPerson = (array) $person;
var_dump($arrayPerson);