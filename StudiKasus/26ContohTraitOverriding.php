<?php

require_once "data/CanRun.php";

use Data\CanRun\{Person, sayHello, SayGoodBye};

// $person = new Person();
// $person->hello("Adrian");
// $person->goodBye("Adrian");
// Hello Adrian
// Good bye Adrian
// Maka akan menjalankan function hello() & goodBye() di class Person

// $person = new Person();
// $person->hello("Adrian");
// $person->goodBye("Adrian");
// Hello Adrian (Maka akan menjalankan function hello() di trait sayHello)
// Good bye Adrian (Maka akan menjlan function goodBye() di trait SayGoodbye)
// Artinya function goodBye() dan hello() akan teroverride oleh trit sayHello dan SayGoodbye

$person = new Person();
$person->hello("Adrian");
$person->goodBye("Adrian");
// Error karena visibility function hello dan goodBye -> private

$person->name = "Adrian";
var_dump($person);

// Jalankan function run (trait CanRun)
$person->run();
// Hasil: Person Adrian is running