<?php

// > Interface
// 1. Sebelumnya kita sudah tahu bahwa abstract class bisa kita gunakan sebagai kontrak untuk class child nya.
// 2. Namun sebenarnya yang lebih tepat untuk kontrak adalah Interface
// 3. Jangan salah sangka bahwa Interface disini bukanlah User Interface
// 4. Interface mirip seperti abstract class, yang membedakan adalah di Interface, semua method otomatis abstract, tidak memiliki block
// 5. Di interface kita tidak boleh memiliki properties, kita hanya boleh memiliki constant 
// 6. Untuk mewariskan interface, kita tidak menggunakan kata kunci extends, melainkan implements
// 7. Dan berbeda dengan class, kita bisa implements lebih dari satu interface

// > Contoh Interface
namespace Data;

// Saat kita membuat interface otomatis semunya abstract (mulai dari nama interface dan functionnya)
interface Car
{
    function drive(): void;

    function getTire(): int;
}

// Implements Interface
// Dengan Interface kita bisa melakukan implementes > 1 interface
// Sedangkan Class / extends itu hanya boleh memiliki 1 parent
class Avanza implements Car
{
    public function drive(): void
    {
        echo "Drive Avanza" . PHP_EOL;
    }

    public function getTire(): int
    {
        return 4;
    }
}

$avanza = new Avanza();
$avanza->drive();
// Hasil: Drive Avanza