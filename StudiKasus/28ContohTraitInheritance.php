<?php 

require_once "data/All.php";

use Data\All\{Person, sayHello, SayGoodBye, All};

$person = new Person();
$person->hello("Adrian");
$person->goodBye("Adrian");
// Error karena visibility function hello dan goodBye -> private

$person->name = "Adrian";
var_dump($person);

// Jalankan function run (trait CanRun)
$person->run();