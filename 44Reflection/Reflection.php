<?php

// > Reflection
// 1. Reflection adalah membaca struktur kode pada saat aplikasi sedang berjalan.
// 2. Reflection adalah materi yang sangat panjang dan banyak, sehingga disini kita hanya akan membahas perkenalannya saja.
// 3. Reflection adalah fitur yang biasanya digunakan saat kita membuat framework
// 4. https://www.php.net/manual/en/book.reflection.php

// =================================================================================================

// > Studi Kasus: Membuat Validation Framework
// 1. Sekarang kita akan coba melakukan studi kasus menggunakan Reflection
// 2. Kita akan membuat validation framework menggunakan reflection
// 3. Validation framework nya cukup sederhana, kita hanya akan mengecek apakah properties bernilai null atau tidak, kalo null atau belum di set, kita akan throw ValidationException
// 4. Tanpa reflection, biasanya untuk melakukan hal ini, kita butuh pengecekan secara manual

// =================================================================================================

// > Validation Tanpa Reflection
// Kelemahan: Jika ada object lain (selain login atau register) misalnya registrasi, create product, dll. Kita harus membuat validate untuk masing2 object tsb secara manual atau satu persatu
// Contoh:
/*
    class ValidationUtil
    {
        static function validate(LoginRequest $request)
        {
            if (!isset($request->username)) {
                throw new ValidationException("Username is null!");
            } elseif (!isset($request->password)) {
                throw new ValidationException("Password is null!");
            }
            
        }
    }
*/

// =================================================================================================

// > Validation Menggunakan Reflection 
// Contoh:
/*
    static function validateReflection($request)
    {
        // Hasil dari class ReflectionClass => obj reflection
        $reflection = new ReflectionClass($request);
        // $propertis => nilainya adalah Array ReflectionProperty
        $properties = $reflection->getProperties(ReflectionProperty::IS_PUBLIC);

        // Looping $properties
        foreach ($properties as $property) {
            // Apakah property sudah di inisialiasi / belum?
            if (!$property->isInitialized($request)) {
                throw new ValidationException("$property->name is not set");
            // Apakah property tsb null / tidak ?
            } elseif (is_null($property->getValue($request))) {
                throw new ValidationException("$property->name is null");
                
            }
        }
    }
*/

// Keuntungannya jika disini kita mempunyai class untuk pengecekan register kita tidak perlu membuat validation baru
