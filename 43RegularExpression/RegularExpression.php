<?php

// > Regular Expression
// 1. PHP mendukung regular expression yang kompatibel dengan bahasa pemrograman Perl.
// 2. Reguler expression merupakan fitur yang digunakan untuk melakukan pencarian di string menggunakan pola tertentu.
// 3. Materi ini sebenarnya materi yang sangat panjang, sehingga disini kita akan bahas sedikit pengenalannya.
// 4. Untuk pembuatan pattern di regular expression, detailnya bisa dibaca disini.
// Link: https://www.php.net/manual/en/pcre.pattern.php

// > Function Regular Expression
// 1. preg_match($pattern, $subject)
// Ket: Mencari kata/karakter yang sesuai dengan pola regex.
// 2. preg_match_all($pattern, $subject)
// Ket: Mencari semua kata/karakter yang sesuai dengan pola regex.
// 3. preg_replace($pattern, $replacement, $subject)
// Ket: Mencari kata/karakter yang sesuai dengan pola regex, lalu menimpanya dengan data baru.
// 4. preg_split($pattern, $subject)
// Ket: Membagi string menjadi sebuah array menggunakan pola regex.