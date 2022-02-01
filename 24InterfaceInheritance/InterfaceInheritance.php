<?php 

// > Interface Inheritance
// 1. Sebelumnya kita sudah tahu kalo di PHP, child class hanya bisa punya 1 class parent.
// 2. Namun berbeda dengan interface, sebuah child class bisa implement lebih dari 1 interface
// 3. Bahkan interface pun bisa implement interface lain, bisa lebih dari 1. Namun jika interface ingin mewarisi interface lain, kita menggunakan kata kunci "extends", bukan implements

// > Implementasi Interface Inheritance
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
interface Car extends HasBrand, IsMaintenance
{
    function drive(): void;

    function getTire(): int;
}

// Implements Interface
// Dengan Interface kita bisa melakukan implementes > 1 interface
// Sedangkan Class / extends itu hanya boleh memiliki 1 parent
class Avanza implements Car, IsClear
{
    public function drive(): void
    {
        echo "Drive Avanza" . PHP_EOL;
    }

    public function getTire(): int
    {
        return 4;
    }

    // Karena Car Extends interface HasBrand dan IsMaintenance
    // Kita perlu menambahkan funtion getBrand dan isMaintenance()
    public function getBrand(): string
    {
        return "Avanza From Toyota";
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

$avanza = new Avanza();
$avanza->drive();
$avanza->getTire();
$avanza->getBrand();
$avanza->isMaintance();
$avanza->isClear();