<?php

class ValidationUtil
{
    // Validation tanpa menggunakan reflection
    static function validate(LoginRequest $request)
    {
        if (!isset($request->username)) {
            throw new ValidationException("Username is not set!");
        } elseif (!isset($request->password)) {
            throw new ValidationException("Password is not set!");
        } elseif (is_null($request->username)) {
            throw new ValidationException("Username is null!");
        } elseif (is_null($request->password)) {
            throw new ValidationException("Password is null!");
        }
    }

    // Validation menggunakan reflection
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
}