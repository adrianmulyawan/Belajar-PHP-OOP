<?php

// > Exception
// 1. Saat kita membuat aplikasi, kita tidak akan terhindar dengan yang namanya error.
// 2. Di PHP, error direpresentasikan dengan istilah "exception", dan semua direpresentasikan dalam bentuk class exception.
// 3. Kita bisa menggunakan class exception sendiri, atau menggunakan yang sudah disediakan oleh PHP.
// 4. Jika kita ingin membuat "exception", maka kita harus membuat class yang implements interface "Throwable" atau turunan-turunanya.

// Note: Throwable jarang digunakan karena kita harus implements semua function-functionnya

// > Membuat Class Exception
/* 
    class ValidationException extends Exception
    {
        # Type Code in Here
    }
*/

// =================================================================================================

// > Membuat Exception
// 1. Exception biasanya terjadi di function.
// 2. Didalam kode program kita, untuk membuat exception kita cukup menggunakan kata kunci "throw", diikuti dengan object exception-nya.

// > Membuat Exception
/* 
    function validateLoginRequest(LoginRequest $loginRequest)
    {
        if (!isset($loginRequest->username)) {
            throw new ValidationException("Username is null!");
        } else if (!isset($loginRequest->password) {
            throw new ValidationException("Password is null!");
        } elseif ($loginRequest->username == "") {
            throw new Exception("Username is blank!");
        } elseif ($loginRequest->password == "") {
            throw new Exception("Password is blank!");
        }
    }
*/

// =================================================================================================

// > Contoh Penerapan Exception

/*
    class ValidationException extends Exception
    {
        
    }

    class LoginRequest
    {
        public string $username;
        public string $password;
    }

    function validateLoginRequest(LoginRequest $request)
    {
        if (!isset($request->username)) {
            throw new ValidationException("Username Tidak Diisi!");
        } elseif (!isset($request->password)) {
            throw new ValidationException("Password Tidak Diisi!");
        } elseif (trim($request->username) == "") {
            // Exception: Exception bawaan dari php
            throw new Exception("Username Kosong!");
        } elseif (trim($request->username) == "") {
            // Exception: Exception bawaan dari php
            throw new Exception("Password Kosong!");
        }
    }

    $loginRequestSuccess = new LoginRequest();
    $loginRequestSuccess->username = "adrianmulyawan";
    $loginRequestSuccess->password = "kepojing";

    validateLoginRequest($loginRequestSuccess);
    // Ketika dijalankan tidak menghasilkan error apapun (berhasil)

    $loginRequestFailed = new LoginRequest();
    validateLoginRequest($loginRequestFailed);
    // Ketika dijalankan akan menghasilkan error exception

    // Secara default ketika program yang dijalankan akan berhenti jika error / terjadi exception. Bagaimana jika terjadi error / exception program tidak berhenti? Disini kita dapat menggunakan "try-catch"
*/

// =================================================================================================

// > Try Catch
// 1. Saat kita memanggil sebuah function yang bisa menyebabkan exception, maka disarankan menggunakna "try-catch" expression di PHP.
// 2. Ini gunanya agar kita bisa menangkap exception yang terjadi, karen jika tidak ditangkap, lalu terjadi exception, maka secara otomatis program akan berhenti.
// 3. Cara menggunakan "try-catch" expression di PHP sangat mudah, di block "try" kita tinggal panggil method yang bisa menyebabkan exception, dan di block "catch" kita bisa melakukan sesuatu jika terjadi exception

// > Contoh Try Catch
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

// > Contoh Multiple Try Catch
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

// > Finally Keyword
// 1. Dalam try-catch, kita bisa menambahkan block "finally".
// 2. Block "finally" ini adalah block dimana selalu dieksekusi baik terjadi exception ataupun tidak.
// 3. Ini sangat cocok ketika kita ingin melakukan sesuatu, tidak peduli sukses ataupun gagal, misal di block try kita ingin membaca file, di block catch kita akan tangkap jika terjadi error, dan di block finally error ataupun sukses membaca file, kita wajib menutup koneksi ke file tersebut, biar tidak menggantung di memory

// > Contoh Finally Keyword!
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

// > Debug Exception
// Exception di PHP memiliki sebuah function bernama getTrace().
// Function getTrace() berisikan informasi dari exception yang terjadi, seperti lokasi file, baris ke berapa, function mana sampai argumenty yang dikirim di function tersebut apa.
// Ini sangat cocok untuk kita jika ingin mendebug ketika terjadi exception.

// > Contoh Debug Exception
/*
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
*/

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
