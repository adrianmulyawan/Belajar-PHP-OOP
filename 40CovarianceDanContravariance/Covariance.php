<?php

// > Covariance
// 1. Saat kita mengoverride function dari parent class, biasanya di child class kita akan membuat function yang sama dengan function yang ada di parent.
// 2. Covariance memungkinkan kita mengoverride return function yang ada di parent class dengan return value yang lebih spesifik.
// 3. Covariance dari parent dijadikan child

abstract class Pet
{
    public string $name;

    abstract public function run(): void;
}

class Cat extends Pet
{
    public function run(): void
    {
        echo "Cat $this->name is running" . PHP_EOL;
    }
}

class Dog extends Pet
{
    public function run(): void
    {
        echo "Dog $this->name is running" . PHP_EOL;
    }
}

interface AnimalShelter
{
    public function adopt(string $name): Pet;
}

class CatShelter implements AnimalShelter
{
    // Dengan Covariance kita bisa merubah return function parentnya menjadi lebih spesifik
    // Disini awalnya return valuenya adalah "Pet" kita ubah menjadi "Cat"
    public function adopt(string $name): Cat
    {
        $cat = new Cat();
        $cat->name = $name;
        return $cat;
    }
}

class DogShelter implements AnimalShelter
{
    // Dengan Covariance kita bisa merubah return function parentnya menjadi lebih spesifik
    // Disini awalnya return valuenya adalah "Pet" kita ubah menjadi "Cat"
    public function adopt(string $name): Dog
    {
        $dog = new Dog();
        $dog->name = $name;
        return $dog;
    }
}

$catShelter = new CatShelter();
$cat = $catShelter->adopt("Franco");

$dogShelter = new DogShelter();
$dog = $dogShelter->adopt("Henry");