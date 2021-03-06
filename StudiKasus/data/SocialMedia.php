<?php 

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