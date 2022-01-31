<?php 

class SocialMedia
{
    public string $name;
}

// Class Final jadi tidak bisa di extends oleh class manapaun
final class Facebook extends SocialMedia
{

}

// Error, karena class Facebook sudah final
// class FakeFacebook extends Facebook
// {

// }