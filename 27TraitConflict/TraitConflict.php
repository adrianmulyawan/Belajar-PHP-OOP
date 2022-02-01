<?php

// > Trait Conflict
// 1. Jika kita menggunakan lebih dari satu trait, lalu terdapat function yang sama di trait tsb
// 2. Maka hal tsb akan menyebabkan konflik
// 3.  Jika terjadi konflik seperti ini, kita bisa mengatasinya dengan menggunakan kata kunci insteadof

// > Contoh Trait Conflict
// trait A
// {
    // function doA(): void
    // {
        // echo "A From Trait A" . PHP_EOL;
    // }

    // function doB(): void
    // {
        // echo "B From Trait A" . PHP_EOL;
    // }
// }

// trait B 
// {
    // function doA(): void
    // {
        // echo "A From Trait B" . PHP_EOL;
    // }

    // function doB(): void
    // {
        // echo "B From Trait B" . PHP_EOL;
    // }
// }

// Contoh Koflik
// class Sample 
// {
    // use A, B;
// }

// $sample = new Sample();
// $sample->doA();
// $sample->doB();
// Error: Karena tabrakan function yang sama didalam 2 Trait

// =================================================================================================

// > Mengtasai Trait Conflict
// class Sample
// {
    // use A, B {
        // A::doA insteadof B;
        // B::doB insteadof A;
    // }
// }

// $sample = new Sample();
// $sample->doA();
// $sample->doB();
// Hasil: 
// A From Trait A
// B From Trait B