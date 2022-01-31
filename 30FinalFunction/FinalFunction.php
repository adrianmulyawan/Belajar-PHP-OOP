<?php 

// > Final Function
// 1. Kata kunci final juga bisa digunakan di function
// 2. Jika sebuha function kita tambahkan kata kunci finall, maka artinya function tsb tidak bisa di override lagi di class childnya
// 3. Ini sangat cocok jika kita ingin mengunci implementasi dari sebuah method agar tidak bisa dirubah lagi oleh class childnya

// > Contoh Final Function

class SocialMedia
{
    public string $name;
}

class Facebook extends SocialMedia
{
    // Buat final function agar tidak dapat di override oleh turunannya
    final public function login(string $username, string $password): bool
    {
        return true;
    }
}

class FakeFacebook extends Facebook
{
    // Tidak bisa di override karena function login di class Facebook sudah final
    // public function login (string $username, string $password): bool
    // {
    //     return false;
    // }
}