<?php

require_once "data/Programmer.php";

$company = new Company();

// Dengan Polymorphism object kita bisa berubah-ubah seperti contoh berikut ini:
$company->programmer = new Programmer("Adrian");
var_dump($company);
$company->programmer = new BackendProgrammer("Hakaman");
var_dump($company);
$company->programmer = new FrontendProgrammer("Irfan");
var_dump($company);

sayHelloProgrammer(new Programmer("Adrian"));
sayHelloProgrammer(new BackendProgrammer("Hakaman"));
sayHelloProgrammer(new FrontendProgrammer("Irfan"));