<?php

// > DateTime
// 1. Biasanya didalam bahasa pemrograman sudah disediakan carauntuk memanipulasi data waktu, termasuk di PHP.
// 2. Di PHP, kita bisa menggunakan class "DateTime" untuk memanipulasi data waktu.
// 3. Ada banyak sekali function di class "DateTime" yang bisa kita gunakan untuk memanipulasi data waktu.

// > DateTime Function
// 1. setTime($hour, $minute, $second) : Mengubah waktu Date Time
// 2. setDate($year, $month, $day) : Mengubah tanggal Date Time
// 1. setTimestamp($unixTimestamp) : Mengubah unix timestamp Date Time

// > Contoh Penerapan DateTime di PHP
$dateTime = new DateTime();
# var_dump($dateTime);
# Hasil : Mengikuti waktu dari file php (php.ini)
/* 
    object(DateTime)#1 (3) {
        ["date"]=>
        string(26) "2022-03-18 07:25:37.106176"
        ["timezone_type"]=>
        int(3)
        ["timezone"]=>
        string(13) "Europe/Berlin"
    }
*/

# Mengatur Tanggal DateTime
$dateTime->setDate(1997, 11, 1);
# Mengatur Jam DateTime
$dateTime->setTime(15, 21, 00);
var_dump($dateTime);
# Hasil
/*
    object(DateTime)#1 (3) {   
        ["date"]=>               
        string(26) "1997-11-01 15
        ["timezone_type"]=>      
        int(3)                   
        ["timezone"]=>           
        string(12) "Asia/Jakarta"
    }                          
*/

// =================================================================================================

// > DateInterval
// 1. Kadang kita hanya ingin memanipulasi waktu dan tanggal sebagian saja, misalnya hanya menambah 1 tahun atau mengurangi beberapa hari.
// 2. Hal ini bisa dilakukan dengan function "add" milik DateTime.
// 3. Namun function "add" tersebut menerima parameter berupa DateInterval "add(new DateInterval("parameter"))".
// 4. Saat menggunakan DateInterval duration, kita perlu menentukan berapa banyak kita menambah interval.
// 5. Kita lihat detailnya disini https://www.php.net/manual/en/dateinterval.construct.php
// 6. Untuk pembuatan duration, harus diawali dengan karakter "P" yang artinya period.

// > Penerapan DateInterval
# Menambah Satu Tahun (Dari 1997 -> 1998)
$dateTime->add(new DateInterval("P1Y"));
var_dump($dateTime);
# Hasil
/*
    object(DateTime)#1 (3) {                    
        ["date"]=>                                
        string(26) "1998-11-01 15:21:00.000000"   
        ["timezone_type"]=>                       
        int(3)                                    
        ["timezone"]=>                            
        string(12) "Asia/Jakarta"                 
    }                                                             
*/

# Mengurangkan 1 Bulan
$minusOneMonth = new DateInterval("P1M");
$minusOneMonth->invert = true;
$dateTime->add($minusOneMonth);
var_dump($dateTime);
# Hasil
/*
    object(DateTime)#1 (3) {                  
        ["date"]=>                              
        string(26) "1998-10-01 15:21:00.000000" 
        ["timezone_type"]=>                     
        int(3)                                  
        ["timezone"]=>                          
        string(12) "Asia/Jakarta"               
    }                                                                                              
*/ 

// =================================================================================================

// > DateTimeZone
// 1. Saat kita membuat object DiteTime, dia akan secara otomatis membuat aktu saat ini sesuai dengan timezone yang disetting di konfigurasi di file php.ini.
// 2. Atau kita bisa menggunakan function setTimeZone untuk mengubah timezone DateTime

// > Implementasi DateTimeZone
$now = new DateTime();
$now->setTimezone(new DateTimeZone("Europe/London"));
var_dump($now);
# Hasil:
/*
    object(DateTime)#3 (3) {
        ["date"]=>
        string(26) "2022-03-18 07:01:01.155513"
        ["timezone_type"]=>
        int(3)
        ["timezone"]=>
        string(13) "Europe/London"
    }
*/

// =================================================================================================

// > Format DateTime
// 1. Kadang kita ingin membuat representasi string dari DateTime yang sudah kita buat.
// 2. Hal ini bisa kita lakukan menggunakan function "format()".
// 3. Function "format()" menerima argument berupa format string, ini bisa kita gunakan untuk memnaipulasi cara kita menampilkan string format waktu.
// 4. Untuk detailnya bisa kita lihat dihalam dokumentasi resminya https://www.php.net/manual/en/datetime.format.php

// > Implementasi Format DateTime
$formatTimeLondon = new DateTime();
$formatTimeLondon->setTimezone(new DateTimeZone("Europe/London"));
echo "Waktu dan Tangal London : " . $formatTimeLondon->format('d M Y H:i:s') . PHP_EOL;
# Hasil: Waktu dan Tangal London : 18 Mar 2022 07:10:50

// =================================================================================================

// > Parse DateTime
// 1. Selain format DateTime menjadi string, di PHP juga kita bisa melakukan hal sebaliknya, yaitu memparsing string menjadi DateTime sesuai dengan format yang kita mau.
// 2. Untuk melakukan itu, kita bisa menggunakan static function "createFromFormat()" dari class DateTime

// > Implementasi Format DateTime
$date = DateTime::createFromFormat("Y-m-d H:i:s", "2020-10-10 10:10:10", new DateTimeZone(
    "Asia/Jakarta"
));
var_dump($date);
# Hasil
/*
    object(DateTime)#6 (3) {
        ["date"]=>
        string(26) "2020-10-10 10:10:10.000000"
        ["timezone_type"]=>
        int(3)
        ["timezone"]=>
        string(12) "Asia/Jakarta"
    }
*/