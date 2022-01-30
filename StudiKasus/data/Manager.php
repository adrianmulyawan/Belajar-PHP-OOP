<?php

class Manager
{
    var string $name;

    function sayHello(?string $name) {
        if (!isset($name)) {
            echo "Hello, my name is $this->name" . PHP_EOL;
        } else {
            echo "Hi $name, my name is $this->name" . PHP_EOL;
        }
        
    }
}

// Class VicePrecident mengextends (menjadi child) dari Class Manager (Parents)
// Jadi class VicePrecident dapat mengakses properties dan methods dari class Manager
class VicePrecident extends Manager 
{
    
}