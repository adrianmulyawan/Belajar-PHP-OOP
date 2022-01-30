<?php

class Barista
{
    var string $name;
    var string $title;

    public function __construct(string $name = "", string $title = "Barista")
    {
        $this->name = $name;
        $this->title = $title;
    }

    function sayHello(string $name)
    {
        echo "Hi $name, my name is Barista $this->name" . PHP_EOL;
    }
}

class Owner extends Barista
{
    // Override ke function __constructor class 
    public function __construct(string $name = "")
    {
        // Tidak Wajib, Tapi Direkomendasikan
        parent::__construct($name, "Owner");
    }

    function sayHello(string $name)
    {
        echo "Hi $name, my name is Owner $this->name" . PHP_EOL;
    }
}