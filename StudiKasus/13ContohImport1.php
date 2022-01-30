<?php

require_once "data/Conflict.php";
require_once "data/Helper.php";

// Memanggil class Conflict yang berada didalam namespace Data\One
use Data\One\Conflict;
// Note: Tidak bisa memanggil class yang namanya sama walaupun namespacenya berbeda

// Memanggil function helpMe() yang berada didalam namespace Helper
use function Helper\helpMe;
// Memanggil const APPLICATION yamg berada didalam namespace Helper
use const Helper\APPLICATION;

// Membuat Object Conflict
$conflict1 = new Conflict();

// Membuat Object Conflict dari Class Conflict namespace Data\Two
$conflict2 = new \Data\Two\Conflict();

// Memanggil function helpMe()
helpMe();

// Memanggil const APPLICATION
echo APPLICATION . PHP_EOL;