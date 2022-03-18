<?php

require_once "exception/ValidationException.php";
require_once "data/LoginRequest.php";
require_once "helper/Validation.php";

// $loginRequestSuccess = new LoginRequest();
// $loginRequestSuccess->username = "adrianmulyawan";
// $loginRequestSuccess->password = "kepojing";

// validateLoginRequest($loginRequestSuccess);
// Ketika dijalankan tidak menghasilkan error apapun (berhasil)

// $loginRequestFailed = new LoginRequest();
// validateLoginRequest($loginRequestFailed);
// Ketika dijalankan akan menghasilkan error exception

// =================================================================================================

// Implementasi Try Catch

# Jika tidak menginputkan username atau password
/*
    $loginRequest = new LoginRequest();
    try {
        validateLoginRequest($loginRequest);
    } catch (ValidationException $exception) {
        echo "Validation Error: {$exception->getMessage()}" . PHP_EOL;
    }
*/
// Hasil => Validation Error: Username Tidak Diisi!

# Jika menginputkan username atau password 
/*
    $loginRequest = new LoginRequest();
    $loginRequest->username = "adrianmulyawan";
    $loginRequest->password = "kepojing";
    try {
        validateLoginRequest($loginRequest);
    } catch (ValidationException $exception) {
        echo "Validation Error: {$exception->getMessage()}" . PHP_EOL;
    }
*/
// Hasil => Berhasil karena tidak menampilkan hasil apapun

# Jika username dan password hanya diinputkan spasi
/*
    $loginRequest = new LoginRequest();
    $loginRequest->username = "   ";
    $loginRequest->password = "   ";
    try {
        validateLoginRequest($loginRequest);
    } catch (ValidationException $exception) {
        echo "Validation Error: {$exception->getMessage()}" . PHP_EOL;
    }
*/
// Hasil => Error tidak tertangkap karena berbeda kelasnya (disini menggunakan exception bawaan php)

// =================================================================================================

// Implementasi Multiple Try Catch
/*
    $loginRequest = new LoginRequest();
    $loginRequest->username = "   ";
    $loginRequest->password = "   ";
    try {
        validateLoginRequest($loginRequest);
    } catch (ValidationException $exception) {
        echo "Validation Error: {$exception->getMessage()}" . PHP_EOL;
    } catch (Exception $exception) {
        echo "Error: {$exception->getMessage()}" . PHP_EOL;
    }
*/
// Hasil => Error Username Kosong!

// =================================================================================================

// Implementasi Finally Keyword
/*
    $loginRequest = new LoginRequest();
    $loginRequest->username = "adrianmulyawan";
    $loginRequest->password = "kepojing";
    try {
        validateLoginRequest($loginRequest);
        echo "Valid" . PHP_EOL;
    } catch (ValidationException $exception) {
        echo "Validation Error: {$exception->getMessage()}" . PHP_EOL;
    } catch (Exception $exception) {
        echo "Error: {$exception->getMessage()}" . PHP_EOL;
    } finally {
        echo "Proses Selesai!" . PHP_EOL;
    }
*/
// Hasil:
// Valid
// Proses Selesai!

// =================================================================================================

// Implementasi Debug Exception
$loginRequest = new LoginRequest();
$loginRequest->username = " ";
$loginRequest->password = " ";
try {
    validateLoginRequest($loginRequest);
    echo "Valid" . PHP_EOL;
} catch (ValidationException | Exception $exception) {
    echo "Error: {$exception->getMessage()}" . PHP_EOL;

    // Hasil berupa string
    var_dump($exception->getTrace());
} finally {
    echo "Proses Selesai!" . PHP_EOL;
}

// Hasil:
/*
    Error: Username Kosong!
    array(1) {
    [0]=>
        array(4) {
            ["file"]=>
            string(60) "C:\xampp\htdocs\pzn-php-oop\StudiKasus\42ContohException.php"
            ["line"]=>
            int(105)
            ["function"]=>
            string(20) "validateLoginRequest"
            ["args"]=>
            array(1) {
            [0]=>
                object(LoginRequest)#1 (2) {
                    ["username"]=>
                    string(1) " "
                    ["password"]=>
                    string(1) " "
                }
            }
        }
    }
    Proses Selesai!
*/
