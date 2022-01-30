<?php

require_once "data/UserInterface.php";

$productDesign = new ProductDesign();
$productDesign->name = "Raudy";
$productDesign->sayHello("Kemal");
// Hasil: Hi Kemal, my name is Product Design Raudy

$frontendDev = new FrontendDeveloper();
$frontendDev->name = "Irfan";
$frontendDev->sayHello("Indah");
// Hasil: Hi Indah, my name is Frontend Developer Irfan 