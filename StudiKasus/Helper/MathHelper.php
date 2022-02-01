<?php

namespace Helper;

class MathHelper
{
    // Penerapan static Keyword pada properties
    static public string $name = "MathHelper";

    // Penerapan static Keyword pada function
    static public function sum(int ...$numbers): int
    {
        $total = 0;
        
        foreach ($numbers as $number) {
            $total = $total + $number;
        }

        return $total;
    }
}