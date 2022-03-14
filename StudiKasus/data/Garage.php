<?php

namespace Data;

interface HasBrand
{
    function getBrand(): string;
}

interface IsMaintenance
{
    function isMaintance(): bool;
}

interface IsClear
{
    function isClear(): bool;
}

// Saat kita membuat interface otomatis semunya abstract (mulai dari nama interface dan functionnya
// Kita extends interface HasBrand dan IsMaintenance
interface Mobil extends HasBrand, IsMaintenance
{
    function drive(): void;

    function getTire(): int;
}

// Implements Interface
// Dengan Interface kita bisa melakukan implementes > 1 interface
// Sedangkan Class / extends itu hanya boleh memiliki 1 parent
class Yaris implements Mobil, IsClear
{
    public function drive(): void
    {
        echo "Drive Yaris" . PHP_EOL;
    }

    public function getTire(): int
    {
        return 4;
    }

    // Karena Car Extends interface HasBrand dan IsMaintenance
    // Kita perlu menambahkan funtion getBrand dan isMaintenance()
    public function getBrand(): string
    {
        return "Avanza From Toyota" . PHP_EOL;
    }

    public function isMaintance(): bool
    {
        return true;
    }

    // Tambahkan Function isClear() dari interface IsClear
    public function isClear(): bool
    {
        return false;
    }
}