<?php

require_once "exception/ValidationException.php";
require_once "data/LoginRequest.php";
require_once "Helper/ValidationUtil.php";

$request = new LoginRequest();
$request->username = null;
$request->password = null;

# tanpa menggunakan reflection
// ValidationUtil::validate($request);

# dengan menggunakan reflection
// ValidationUtil::validateReflection($request);

class RegisterUserRequest
{
    public ?string $name;
    public ?string $address;
    public ?string $email;
    public ?string $password;
}

// Jika membuat class baru kita tidak perlu membuat validasi untuk melakukan pengecekan
// Cukup menggunakan validationReflection tadi saja
$register = new RegisterUserRequest();
$register->name = "Adrian Mulyawan";
$register->address = "Serdam";
// $register->email = "adrianmulyawan666@gmail.com";
// $register->password = "kepolu";
ValidationUtil::validateReflection($register);