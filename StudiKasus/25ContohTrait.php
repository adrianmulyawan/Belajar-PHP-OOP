<?php

require_once "data/SayGoodBye.php";

use Data\Traits\{Person, sayHello, SayGoodBye};

$person = new Person();
$person->hello("Adrian");
$person->goodBye("Adrian");
// Hello Adrian
// Good bye Adrian

$person->name = "Adrian";
var_dump($person);