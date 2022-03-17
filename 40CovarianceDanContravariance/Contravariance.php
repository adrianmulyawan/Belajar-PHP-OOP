<?php

// > Contravariance
// 1. Sedangkan contravariance adalah memperbolehkan sebuah child class untuk membuat function argument yang lebih tidak spesifik dari parent classnya
// 2. Contravariance dari child dijadikan parent

// > Contoh Contravariance
class Food
{

}

class AnimalFood extends Food
{
    
}

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
$cat->eat(new AnimalFood());

$dogShelter = new DogShelter();
$dog = $dogShelter->adopt("Henry");
$dog->eat(new Food());