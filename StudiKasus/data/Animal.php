<?php 

namespace Data;

// Abstract Clas
abstract class Animal
{
    public string $name;

    // Abstract Function
    abstract public function run(): void;
}

class Cat extends Animal
{
    public function run(): void
    {
        echo "Cat $this->name running!" . PHP_EOL;
    }
}

class Dog extends Animal
{
    public function run(): void
    {
        echo "Dog $this->name running!" . PHP_EOL;
    }
}