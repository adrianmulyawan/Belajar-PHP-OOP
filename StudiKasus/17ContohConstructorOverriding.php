<?php

require_once "data/Barista.php";

$barista = new Barista("Rony", "Headbar");
// $barista->name = "Bobby";
// $barista->title = "Staff Bar";
$barista->sayHello("Miftah");
// Hasil: Hi Miftah, my name is Barista Rony

$owner = new Owner("Adrian");
$owner->name = "Manda";
$owner->sayHello("Rizal");
// Hasil: Hi Rizal, my name is Owner Manda