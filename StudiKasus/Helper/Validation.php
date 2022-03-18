<?php

require_once "data/LoginRequest.php";
require_once "exception/ValidationException.php";

function validateLoginRequest(LoginRequest $request)
{
    if (!isset($request->username)) {
        throw new ValidationException("Username Tidak Diisi!");
    } elseif (!isset($request->password)) {
        throw new ValidationException("Password Tidak Diisi!");
    } elseif (trim($request->username) == "") {
        // Exception: Exception bawaan dari php
        throw new Exception("Username Kosong!");
    } elseif (trim($request->password) == "") {
        // Exception: Exception bawaan dari php
        throw new Exception("Password Kosong!");
    }
}