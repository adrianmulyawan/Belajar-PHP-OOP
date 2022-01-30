<?php 

// > Namespace
// 1. Saat kita membuat aplikasi, bisa dipastikan kita akan banyak sekali membuat class
// 2. Jika class terlalu banyak, kadang akan menyulitkan kita untuk mencari / mengklasifikasikan jenis-jenis class
// 3. PHP memiliki fitur namespace, dimana kita bisa menyimpan class-class kita didalam namespace
// 4. Namespace bisa nested, dan jika kita ingin mengakses class yang terdapat di namespace, kita perlu menyebutkan nama namespacenya
   // *Namespace mirip seperti folder dan class mirip seperti file
   // *Didalam Namespace bisa menyimpan Namespace lagi
// 5. Namespace bagus ketika kita punya beberapa class yang sama dengan menggunakan namespace nama class sama tidak akan menjadikan error di PHP

// =================================================================================================

// > Contoh class yang namanya sama
// class Conflict {
// 
// }

// class Conflict {
// 
// }

// Jika kita jalankan ini akan error karena disini ada 2 class yang namanya sama 

// =================================================================================================

// > Membuat Namespace
// 1. Untuk membuat namespace, kita bisa menggunakan kata kunci "namespace"
// 2. Jika kita ingin membuat sub namespace, kita cukup gunakan karakter "\" setelah namespace sebelumnya

// > Contoh Membuat Namespace
// namespace Data\One {
    // class Conflict 
    // {

    // }
// }

// namespace Data\Two {
    // class Conflict 
    // {

    // }
// 

// =================================================================================================

// > Membuat Object Dari Namespace
// $conflict1 = new \Data\One\Conflict();
// $conflict2 = new \Data\Two\Conflict();

// =================================================================================================

// > Function dan Constant di Namespace
// 1. Selain class, kita juga menggunakan functon dan constant di namespace
// 2. Dan jika kita ingin menggunakan function atau constant tsb, kita bisa menggunakannya dengan diawali dengan nama namespacenya

// > Contoh Function dan Constant di Namespace
# Buat namespace seperti ini jika satu file ini menggunakan 1 namespace yang sama
// namespace Helper;

// function helpMe() {
    // echo "HELP ME" . PHP_EOL;
// }

// const APPLICATION = "BELAJAR PHP OOP";

// =================================================================================================

// > Global Namespace
// 1. Secara default saat kita membuat kode di PHP sebenarnya itu disimpan didalam global namespace
// 2. Global Namespace adalah namespace yang tidak memiliki nama namespace

// > Contoh Global Namespace
namespace {
    echo "Ini adalah Global Namespace" . PHP_EOL;
}