<?php 

namespace Data;

class Shape
{
    public function getCorner()
    {
        return 0;
    }
}

class Rectangle extends Shape
{
    public function getCorner()
    {
        return 4;
    }

    // Function ini merefrence function getCorner() milik parentnya (class Shape)
    public function getParentCorner()
    {
        // Karena disini kita mereturn function getCorner() milik parentnya
        return parent::getCorner();
    }
}