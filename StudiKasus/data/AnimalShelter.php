<?php

namespace Data;

require_once "Pet.php";

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