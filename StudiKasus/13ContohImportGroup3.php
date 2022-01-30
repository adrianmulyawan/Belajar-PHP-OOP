<?php

require_once "data/Conflict.php";
require_once "data/Helper.php";

// Memanggil class Conflict yang berada didalam namespace Data\One
use Data\One\{Conflict as Conflict1, Sample, Dummy};
// Memanggil class Conflict yang berada didalam namespace Data\Two
use Data\Two\{Conflict as Conflict2};
// Memanggil function helpMe() yang berada didalam namespace Helper
use function Helper\{helpMe as help};
// Memanggil const APPLICATION yamg berada didalam namespace Helper
use const Helper\{APPLICATION as APP};

// Membuat Object Conflict
$conflict1 = new Conflict1();

// Membuat Object Dummy
$dummy = new Dummy();

// Membuat Object Sample
$sampel = new Sample();

// Membuat Object Conflict dari Class Conflict namespace Data\Two
$conflict2 = new Conflict2();

// Memanggil function helpMe()
help();

// Memanggil const APPLICATION
echo APP . PHP_EOL;