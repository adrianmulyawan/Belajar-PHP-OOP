<?php 

// > Final Class
// 1. Kata kunci final bisa kita gunakan di class, dimana jika kita menggunakan kata kunci final sebelum class, maka kita bisa menandakan bahwa class tersebut tidak bisa diwariskan lagi
// 2. Secara otomatis semua class child / turunannya akan error

// > Contoh Final Class
class SocialMedia
{
    public string $name;
}

// Class Final jadi tidak bisa di extends oleh class manapaun
final class Facebook extends SocialMedia
{

}

// Error, karena class Facebook sudah final
class FakeFacebook extends Facebook
{

}