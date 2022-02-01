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
        // Untuk Function doA() kita akan menggunakan dari Trait A, dari pada (insteadof) Trait B
        A::doA insteadof B;

        // Untuk Function doB() kita akan menggunakan dari Trait B, dari pada (insteadof) Trait A
        B::doB insteadof A;
    }
}

$sample = new Sample();
$sample->doA();
$sample->doB();
// Hasil: 
// A From Trait A
// B From Trait B