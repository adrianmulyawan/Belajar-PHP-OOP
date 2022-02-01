<?php

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

// Mengubah Object Menjadi Array
$arrayLagi = (array) $object;
var_dump($arrayLagi);

// Mengubah Object Menjadi Array
require_once "data/Person.php";

$person = new Person("Adrian", "Pontianak");
var_dump($person);

$arrayPerson = (array) $person;
var_dump($arrayPerson);