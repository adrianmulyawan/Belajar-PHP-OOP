<?php 

// > Type Checks dan Casts
// 1. Sebelumnya kita sudah tau cara melakukan konversi tipe data bukan class
// 2. Khusus untuk tipe data object, kita tidak perlu melakukan konversi secara eksplisit
// 3. Namun agar aman, sebelum melakukan casts, pastikan kita melakukan type check (pengecekan tipe data), dengan menggunakan kata kunci "instanceof"
// 4. Hasil operator "instanceof" adalah boolean, true jika tipe data sesuai, false jika tidak sesuai

// > Contoh Penerapan Type Checks dan Casts
// function sayHelloProgrammer(Programmer $programmer)
// {
    // echo "Hello, nama saya $programmer->name" . PHP_EOL;
    // if ($programmer instanceof BackendProgrammer) {
        // echo "$programmer->name adalah seorang Backend Developer" . PHP_EOL;
    // }elseif ($programmer instanceof FrontendProgrammer) {
        // echo "$programmer->name adalah seorang Frontend Developer" . PHP_EOL;
    // } else {
        // echo "$programmer->name adalah seorang Fullstack Developer" . PHP_EOL;
    // }
// }

// sayHelloProgrammer(new Programmer("Adrian"));
# Hello, nama saya Adrian
# Adrian adalah seorang Fullstack Developer

// sayHelloProgrammer(new BackendProgrammer("Hakaman"));
# Hello, nama saya Hakaman
# Hakaman adalah seorang Backend Developer

// sayHelloProgrammer(new FrontendProgrammer("Irfan"));
# Hello, nama saya Irfan
# Irfan adalah seorang Frontend Developer