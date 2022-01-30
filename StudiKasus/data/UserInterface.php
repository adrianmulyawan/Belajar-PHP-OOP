<?php

class ProductDesign
{
    var string $name;

    function sayHello(string $name)
    {
        echo "Hi $name, my name is Product Design $this->name" . PHP_EOL;
    }
}

class FrontendDeveloper extends ProductDesign
{
    // Overidding function sayHello dari class ProductDesign
    function sayHello(string $name)
    {
        echo "Hi $name, my name is Frontend Developer $this->name" . PHP_EOL;
    }
}