<?php 

trait A
{
    function doA(): void
    {
        echo "A From Trait A" . PHP_EOL;
    }

    function doB(): void
    {
        echo "B From Trait A" . PHP_EOL;
    }
}

trait B 
{
    function doA(): void
    {
        echo "A From Trait B" . PHP_EOL;
    }

    function doB(): void
    {
        echo "B From Trait B" . PHP_EOL;
    }
}

// Contoh Koflik
// class Sample 
// {
//     use A, B;
// }

class Sample
{
    use A, B {
        A::doA insteadof B;
        B::doB insteadof A;
    }
}

$sample = new Sample();
$sample->doA();
$sample->doB();
// Hasil: 
// A From Trait A
// B From Trait B