<?php 

namespace Data;

// Saat kita membuat interface otomatis semunya abstract (mulai dari nama interface dan functionnya)
interface Motor
{
    public function drive(): void;

    public function getTire(): int;
}

// Implements Interface
// Dengan Interface kita bisa melakukan implementes > 1 interface
// Sedangkan Class / extends itu hanya boleh memiliki 1 parent
class Supra implements Motor
{
    public function drive(): void
    {
        echo "Supra is drive" . PHP_EOL;
    }

    public function getTire(): int
    {
        return 2;
    }
}