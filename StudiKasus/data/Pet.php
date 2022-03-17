<?php

namespace Data;

require_once "Food.php";

abstract class Pet
{
    public string $name;

    abstract public function run(): void;
    
    abstract public function eat(AnimalFood $animalFood): void;
}

class Cat extends Pet
{
    public function run(): void
    {
        echo "Cat $this->name is running" . PHP_EOL;
    }

    public function eat(AnimalFood $animalFood): void
    {
        echo "Cat is eating!" . PHP_EOL;
    }
}

class Dog extends Pet
{
    public function run(): void
    {
        echo "Dog $this->name is running" . PHP_EOL;
    }

    // Dengan contravariance kita bisa merubah argument/parameternya dari parent classnya
    // Disini awal argumentnya "AnimalFood" kita ubah menjadi parentnya yaitu "Food"
    public function eat(Food $food): void
    {
        echo "Dog is eating!" . PHP_EOL;
    }
}